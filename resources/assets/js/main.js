/**
 * Created by alumne on 17/11/15.
 */

var Vue = require('vue');

var vm=new Vue({

    el: '#email',
    data: {
        placeholder:"youremail@gmail.com"
    },
    methods:{
        sayhello:function(){

        },
        checkEmailsExists: function(item){
            console.debug("hey")
        }
    }

});