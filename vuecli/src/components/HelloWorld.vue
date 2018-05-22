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
      <v-spacer></v-spacer>
      <v-toolbar-title>Application</v-toolbar-title>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    </v-toolbar>
    <v-content>
      <v-container>
        <div>
					<form ref="form">
						<input type="file" name="file">
						<v-btn color="info" id="upJS" @click="upload">上传</v-btn>
					</form>
					<v-layout row>
        			<v-flex xs2>
       				 <v-subheader>查询内容：</v-subheader>
						   <v-subheader>查询列：</v-subheader>
      				</v-flex>
      				<v-flex xs4>
        			<v-text-field
         			 id="testing"
         			 name="input-1"
          		 label="Label Text"
              ></v-text-field>
									<v-select
										:items="lines"
										v-model="e1"
										label="Select"
										single-line
									></v-select>
								</v-flex>
								<v-flex xs2>
									<v-btn color="info">查询</v-btn>
      				</v-flex>
							<v-flex xs2>
       				 <v-subheader>查询内容：</v-subheader>
						   <v-subheader>查询列：</v-subheader>
      				</v-flex>
	    
          </v-layout>
				<v-data-table
    :headers="headers"
    :items="items"
    hide-actions
    class="elevation-1"
  >
    <template slot="items" slot-scope="props">
			<td v-for="{ align, value } of headers" :class="{ 'text-xs-right': align === 'right' }">{{ props.item[value] }}</td>
    </template>
  </v-data-table>
		    </div>
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
			e1: null,
		}),
		
		computed: {
			headers() {
				return this.table ? this.table.content.schema.fields.map(col => ({
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
				return this.table ? this.table.content.schema.fields : []
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
		}
  }
  }
</script>
