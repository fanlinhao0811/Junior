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
            <v-icon>contact_mail</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>	<router-link to="/rules">规则映射</router-link></v-list-tile-title>
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
						<v-btn color="info" id="upJS" @click="upload2merge">上传</v-btn>
					</form>
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
			selected: [],
			items:[],
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
		}
	}
  }
</script>
