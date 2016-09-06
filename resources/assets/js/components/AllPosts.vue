<template>
    <div class="post-preview" v-for="item in items">
        <a v-bind:href="item.slug|ensureUrl">
            <h2 class="post-title">
                {{item.title}}
            </h2>
        </a>
        <p class="post-meta">Posted by <a href="#">Sun</a> on {{item.created_at}}</p>
    </div>
    <hr>
    <ul class="pagination">
        <li class="page-item" v-on:click="getItem(n+1)" v-for="n in pagination.total_page" v-if="pagination.total_page>1"><span class="page-link">{{n+1}}</span></li>
    </ul>
</template>

<script>
    Vue.filter('ensureUrl', function (value) {
        return 'post/'+value;
    });
    module.exports = {
        data: function () {
            return {
                items: [],
                pagination: {
                    total_page:0
                }
            }
        },
        ready() {
            console.log('post list ready.');
            this.getItem(1);
        },
        methods:{
            getItem:function(page){
                this.$http.get('api/home?type=all&page='+page).then((response) => {
                    response.status;
                this.$set('items', response.data.data);
                this.$set('pagination.total_page', response.data.last_page);},
                (response) => {console.log('error');});
            }
        },
        components: {
            pagination: require('vue-bootstrap-pagination')
        }
    };
</script>
