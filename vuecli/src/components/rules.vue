<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      fixed
      right
      app
    >
      <v-list dense>
				<v-list-tile @click="">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title><router-link to="/">首页</router-link></v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title><router-link to="/merge">上传合并CSV</router-link></v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="">
          <v-list-tile-action>
            <v-icon>contact_mail</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title><router-link to="/newLine">新建CSV列名</router-link></v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="cyan" dark fixed app>
      <v-spacer>
				<form ref="form">
						<input type="file" name="file">
						<v-btn color="info" id="upJS" @click="upload">导入CSV</v-btn>
					</form>
			</v-spacer>
      <v-toolbar-title>Application</v-toolbar-title>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    </v-toolbar>
    <v-content>
      <v-container>
					<v-layout row>
      				<v-flex xs2>
								<v-select
									:items="lines"
									v-model="column"
									label="列名"
									editable
                  item-value="text"
								></v-select>
								</v-flex>
								<v-flex xs2>
									<v-btn color="info" @click="del">删除</v-btn>
      				</v-flex>
							<v-flex xs2>
        			<v-text-field
							v-model="column1"
          		 label="列名"
              ></v-text-field>
								</v-flex>
								<v-flex xs2>
									<v-btn color="info" @click="add">添加</v-btn>
      				</v-flex>
          </v-layout>
				<v-data-table
					:headers="headers"
					:items="items"
					hide-actions
					class="elevation-1"
					item-key="index"
				>
    <template slot="items" slot-scope="props">
			<td v-for="{ align, value } of headers" :class="{ 'text-xs-right': align === 'right' }">{{ props.item[value] }}</td>		
    </template>
  </v-data-table>
   <v-layout row>
		 <v-flex xs2>
       <v-subheader>内容->机构映射</v-subheader>
		 </v-flex>
		 <v-flex xs4>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>keys</v-subheader>
		 </v-flex>
  	 <v-flex xs2>
				<v-text-field
				v-model="key1"
				></v-text-field>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>value</v-subheader>
		 </v-flex>
     <v-flex xs1>
				<v-text-field
				v-model="value1"
        ></v-text-field>
			</v-flex>
					<v-btn color="info" >添加</v-btn>
					<v-btn color="info" >应用</v-btn>
    </v-layout>
		<v-layout row>
		 <v-flex xs2>
       <v-subheader>自定义映射</v-subheader>
		 </v-flex>
		 <v-flex xs1>
			 <v-select
					:items="lines"
					v-model="column"
					label="源"
					editable
					item-value="text"
				></v-select>
		 </v-flex>
		 <v-flex xs2>
			 <v-select
					:items="lines"
					v-model="column"
					label="目标列"
					editable
					item-value="text"
				></v-select>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>规则</v-subheader>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>key</v-subheader>
		 </v-flex>
  	 <v-flex xs2>
				<v-text-field
				v-model="key2"
				></v-text-field>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>value</v-subheader>
		 </v-flex>
     <v-flex xs1>
				<v-text-field
				v-model="value2"
        ></v-text-field>
			</v-flex>
					<v-btn color="info" >添加</v-btn>
					<v-btn color="info" >应用</v-btn>
    </v-layout>
		<v-layout row>
		 <v-flex xs2>
       <v-subheader>标签映射</v-subheader>
		 </v-flex>
		 <v-flex xs1>
			 <v-select
					:items="lines"
					v-model="column"
					label="源"
					editable
					item-value="text"
				></v-select>
		 </v-flex>
		 <v-flex xs2>
			 <v-select
					:items="lines"
					v-model="column"
					label="目标列"
					editable
					item-value="text"
				></v-select>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>规则</v-subheader>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>keys</v-subheader>
		 </v-flex>
  	 <v-flex xs2>
				<v-text-field
				v-model="key3"
				></v-text-field>
		 </v-flex>
		 <v-flex xs1>
       <v-subheader>value</v-subheader>
		 </v-flex>
     <v-flex xs1>
				<v-text-field
				v-model="value3"
        ></v-text-field>
			</v-flex>
					<v-btn color="info" >添加</v-btn>
					<v-btn color="info" >应用</v-btn>
    </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import api from '../api'
  export default {
    data: () => ({
			drawer: null,
			table: null,
			column1: null,
			column: null,
			key1: null,
			value1: null,
			key2: null,
			value2: null,
			key3: null,
			value3: null,
			key: null,
			value:[],
		}),
		
		computed: {
			headers() {
				return this.table ?this.table.content.schema.fields.map(col => ({
					text: col.name,
					align: col.type === 'integer' ? 'right' : 'left',
					sortable: false,
					value: col.name
				})) : []
			},
			items() {
				return this.table ? this.table.content.data : []
			},
			lines(){
				return this.table ? this.table.content.schema.fields.map(col => ({
					text: col.name,
					value: col.name
				})) : []
			},
			lines1(){
				return this.table ? [{ text: '全部', value: '' }, ...this.table.content.schema.fields.map(col => ({
					text: col.name,
					value: col.name
				}))] : []
			}
		},

    props: {
      source: String
    },
  methods: {
    async upload() {
			try {
				this.table = await api.post('/importcsv', new FormData(this.$refs.form), { type: 'form' })
			} catch (e) {
				console.error(e)
			}
		},
	 async del() {
		 try {
				 this.table = await api.post('/del-col-content',{ fileName: this.table.fileName, colName: this.column })
			} catch (e) {
				console.error(e)
			}
	},
	async add() {
		 try {
				 this.table = await api.post('/add-col',{ fileName: this.table.fileName, colName: this.column1 })
			} catch (e) {
				console.error(e)
			}
	}
	}
  }
</script>
