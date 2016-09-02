<template >
    <div class="post-preview" v-for="item in items">
        <a v-bind:href="item.id|ensureUrl">
            <h2 class="post-title">
                {{item.title}}
            </h2>
        </a>
        <p class="post-meta">Posted by <a href="#">Sun</a> on {{item.created_at}}</p>
    </div>
    <hr>
    <pagination :pagination="pagination" :callback="loadData" :offset="3"></pagination>
</template>

<script>
    Vue.filter('ensureUrl', function (value) {
        return 'post/'+value;
    });
    module.exports = {
        data: function () {
            return {
                items: [],
                url: '',
                pagination: {
                    total: 0, per_page: 12,
                    from: 1, to: 0,
                    current_page: 1
                },
                loadData:function(){
                }
            }
        },
        ready() {
            console.log('post list ready.');
            this.$http.get('api/home?type=all').then((response) => {response.status;this.$set('items', response.data.data);},
            (response) => {console.log('error');});
        },
        method:{
            'loadData':function() {
                let data = {
                    paginate: this.pagination.per_page,
                    page: this.pagination.current_page
                };
            }
        },
        components: {
            pagination: require('vue-bootstrap-pagination')
        }
    };
</script>
