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
				<v-list-tile @click="">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title><router-link to="/rules">规则映射</router-link></v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="cyan" dark fixed app>
      <v-spacer>
				<form ref="form">
						<input type="file" name="file">
						<v-btn color="info" id="upJS" @click="upload">上传</v-btn>
					</form>
			</v-spacer>
      <v-toolbar-title>Application</v-toolbar-title>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    </v-toolbar>
    <v-content>
      <v-container>
					<v-layout row>
      				<v-flex xs2>
        			<v-text-field
								v-model="key"
         			 name="input-1"
          		 label="Label Text"
              ></v-text-field>
								</v-flex>
      				<v-flex xs2>
								<v-select
									:items="lines"
									v-model="column"
									label="Select"
									editable
                  item-value="text"
								></v-select>
								</v-flex>
								<v-flex xs2>
									<v-btn color="info" @click="search">查询</v-btn>
      				</v-flex>
          </v-layout>
				<v-data-table
					:headers="headers"
					:items="items"
					hide-actions
					class="elevation-1"
          v-model="selected"
					item-key="index"
				>
    <template slot="items" slot-scope="props">
			<tr :active="props.selected" @click="props.selected = !props.selected">
			<td v-for="{ align, value } of headers" :class="{ 'text-xs-right': align === 'right' }">{{ props.item[value] }}</td>		
			<td>
            <v-checkbox
              :input-value="props.selected"
              primary
              hide-details
            ></v-checkbox>
      </td>
			</tr>
    </template>
  </v-data-table>
   <v-layout row>
      				<v-flex xs2>
        			<v-text-field
							v-model="before"
          		 label="替换前"
              ></v-text-field>
								</v-flex>
      				<v-flex xs2>
							<v-text-field
							v-model="after"
          		 label="替换后"
              ></v-text-field>
							</v-flex>
								<v-flex xs2>
									<v-select
										:items="lines1"
										v-model="column1"
										label="Select"
										editable
                  item-value="text"
									></v-select>
								</v-flex>
								<v-flex xs2>
									<v-btn color="info" @click="replace">替换</v-btn>
      				</v-flex>
							<v-flex xs4>
      				</v-flex>
							<v-flex xs2>
									<v-btn color="info" @click="delrow">删除</v-btn>
      				</v-flex>
          </v-layout>
					<v-layout row>
      				<v-flex xs2>
        			<v-text-field
							v-model="stash"
          		 label="表名"
              ></v-text-field>
								</v-flex>
								<v-flex xs2>
									<v-btn color="info" @click="bb">暂时存放</v-btn>
      				</v-flex>
							<v-flex xs8>
      				</v-flex>
							<v-flex xs2>
        			<v-text-field
							v-model="exp"
          		 label="表名"
              ></v-text-field>
								</v-flex>
								<v-flex xs2>
									<v-btn color="info" @click="aa">进入新表</v-btn>
      				</v-flex>
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
			selected: [],
			column: null,
			before: null,
			after: null,
			key: null,
			value:[],
			stash: null,
			exp: null,
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
				return this.table ? [{ text: '全部', value: '' }, ...this.table.content.schema.fields.map(col => ({
					text: col.name,
					value: col.name
				}))] : []
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
				this.table = await api.post('/upload', new FormData(this.$refs.form), { type: 'form' })
			} catch (e) {
				console.error(e)
			}
		},
	 async search() {
		 try {
			 if(this.column === '全部'){
				 this.table = await api.get('/search', { column: this.column, key: this.key, fileName: this.table.fileName })
			 }else{
				 this.table = await api.get('/searchbycol', { column: this.column, key: this.key, fileName: this.table.fileName })
			 }
			} catch (e) {
				console.error(e)
			}
	},
	async replace(){
		try {
			 if(this.column1 === '全部'){
				 this.table = await api.post('/replace', { fileName: this.table.fileName, beforereplace:this.before, afterreplace:this.after})
			 }else{
				 this.table = await api.post('/replacebycol', { fileName: this.table.fileName, beforereplace:this.before, afterreplace:this.after, col: this.column1 })
			 }
			} catch (e) {
				console.error(e)
			}
	},
	async delrow(){
		try {
				 this.table = await api.post('/delrow', { fileName: this.table.fileName, index: this.selected.map(item => { return item.index}) })
        }
			  catch (e) {
				  console.error(e)
			}
	},
	async bb(){
		try {
				 this.table = await api.post('/stash', { fileName: this.table.fileName, stashFileName: this.stash, index: this.selected.map(item => { return item.index}) })
        }
			  catch (e) {
				  console.error(e)
			}
	},
	async aa(){
		try {
				 this.table = await api.post('/export', { fileName: this.table.fileName, exportFileName: this.exp, index: this.selected.map(item => { return item.index}) })
        }
			  catch (e) {
				  console.error(e)
			}
	}
	}
  }
</script>
