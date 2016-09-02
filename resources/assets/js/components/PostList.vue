<template>
    <div class="post-preview" v-for="item in items">
        <a v-bind:href="item.id|ensureUrl">
            <h2 class="post-title">
                {{item.title}}
            </h2>
        </a>
        <p class="post-meta">Posted by <a href="#">Sun</a> on {{item.created_at}}</p>
    </div>
    <hr>
</template>

<script>
    Vue.filter('ensureUrl', function (value) {
        return 'post/'+value;
    });
    module.exports = {
        data :function(){
            return {
                items: [],
                url:''
            }
        },
        ready() {
            console.log('post list ready.');
            this.$http.get('api/home?type=home').then((response) => {response.status;this.$set('items', response.data);},
            (response) => {console.log('error');});
        }
    }
</script>
