<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      fixed
      right
      app
    >
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
    </v-navigation-drawer>
    <v-toolbar color="cyan" dark fixed app>
      <v-spacer>
				<form ref="form">
						<input type="file" name="file">
						<v-btn color="info" id="upJS" @click="upload2merge">上传</v-btn>
				</form>
			</v-spacer>
      <v-toolbar-title>Application</v-toolbar-title>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    </v-toolbar>
       <v-content>
      <v-container>
				<v-data-table
					:items="items"
					hide-actions	
					:headers="headers"
          v-model="selected"
          class="elevation-1"
					item-key="fileName"
				>
				<template slot-scope="props"></template>
					<template slot="items" slot-scope="props">
						<tr :active="props.selected" @click="props.selected = !props.selected">
						<td>{{ props.index}}</td>
						<td>{{ props.item.fileName}} </td>
						<td> <v-checkbox
              v-model="props.selected"
              primary
              hide-details
            ></v-checkbox></td>
						</tr>
					</template>
				</v-data-table>
				<v-layout row>
					    <v-flex xs2>
        			<v-text-field
							v-model="mergedName"
          		 label="文件名"
              ></v-text-field>
								</v-flex>
							<v-flex xs2>
									<v-btn color="info" @click="merge">合并</v-btn>
      				</v-flex>
							<v-flex xs6></v-flex>
							<v-flex xs2>
									<v-btn color="info" @click="del">删除</v-btn>
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
			selected: [],
			items:[],
			mergedName:null,
	  	headers: [
        { text: 'index',value: 'index' },
        { text: '文件名', value: '文件名' },
        { text: '选择', value: '选择' },
      ],
		}),

    props: {
      source: String
    },
  methods: {
    async upload2merge() {
			try {
				this.table = await api.post('/upload2merge', new FormData(this.$refs.form), { type: 'form' })
				this.items = this.table.fileNames.map(fileName => ({ fileName }))
			} catch (e) {
				console.error(e)
			}
		},
		async merge() {
			try {
				this.table = await api.post('/merge', { fileNames: this.selected.map(item => { return item.fileName}) ,mergedName:this.mergedName })
			} catch (e) {
				console.error(e)
			}
		},
		async del() {
			try {
				if(this.selected.length === 1){
    				this.table = await api.get('/del-tmp-file', {fileName : this.selected[0].fileName})
				}else(
					  alert(111)
				)
			} catch (e) {
				console.error(e)
			}
		},

	}
  }
</script>
