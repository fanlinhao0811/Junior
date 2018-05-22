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
				<form action="post">
					添加列名:<input type="text">
					删除列名:<input type="text">
					<v-btn color="info">提交</v-btn>
				</form>
					<table border="1px">
						<tr>
							<td>111</td>
							<td>111</td>
							<td>111</td>
						</tr>
						
					</table>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
  import axios from 'axios'
  export default {
    data: () => ({
      drawer: null
    }),
    props: {

    },
		mounted:function(){
			axios.get('   ').then(
				()=>{}
			).catch(
				()=>{}
			);
		}
  }
  
</script>
