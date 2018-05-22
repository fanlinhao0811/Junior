import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import merge from '@/components/merge'
import rules from '@/components/rules'
import newLine from '@/components/newLine'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path     : '/merge',
      component: merge
    },
    {
      path     : '/rules',
      component: rules
		},
    {
      path     : '/newLine',
      component: newLine
    }
  ]
})
