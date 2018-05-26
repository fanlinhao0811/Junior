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
      <v-flex xs12 sm6 offset-sm3>
        <v-card>
					<v-toolbar color="light-blue" dark>
						<v-text-field
							v-model="colName"
          		 label="列名"
              ></v-text-field>
           <v-btn icon @click="addCol">
              <v-icon>+</v-icon>
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn icon @click="createschema">
              <v-icon >✔</v-icon>
            </v-btn>
          </v-toolbar>
          <v-list two-line subheader>
            <v-list-tile v-for="item in value">
              <v-list-tile-content>
                <v-list-tile-title>{{ item }}</v-list-tile-title>
              </v-list-tile-content>
              <v-list-tile-action>
                <v-btn icon ripple @click="delCol">
                  <v-icon color="grey lighten-1">info</v-icon>
                </v-btn>
              </v-list-tile-action>
            </v-list-tile>
          </v-list>
        </v-card>
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
			colName: "",
      delColName: "",
			col: [],
			value: ['unix_time','时间','内容' ]
		}),

    props: {
      source: String
    },
  methods: {
    addCol() {
      if(!this.colName.trim()) return ;
      this.value.push(this.colName);
      this.colName = "";
    },
    delCol() {
			alert(this.value)
      // if(!this.delColName.trim()) return ;
      // this.value.forEach((item,index) => {
      //   if(item == this.delColName.trim()){
      //     this.value.splice(index, 1);
      //   }
      // });
      // this.delColName = "";
		},
		async createschema() {
			try {
				this.table = await api.post('/createschema',{schema:this.value})
			} catch (e) {
				console.error(e)
			}
		}
	}    
}
</script>
