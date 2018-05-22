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
						<v-btn color="info" id="upJS" @click="upload">导入CSV</v-btn>
					</form>
					
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
