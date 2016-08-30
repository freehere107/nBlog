<template>
    <div class="post-preview" v-for="item in items">
        <a href="javascript:void(0)">
            <h2 class="post-title">
                {{item.title}}
            </h2>
            <h3 class="post-subtitle">
                {{item.content}}
            </h3>
        </a>
        <p class="post-meta">Posted by <a href="#">Sun</a> on {{item.created_at}}</p>
    </div>
    <hr>
</template>

<script>
    module.exports = {
        data :function(){
            return {
                items: []
            }
        },
        ready() {
            console.log('post list ready.');
            this.$http.get('api/home', {type: 'home'}).then((response) => {
                response.status;
                this.$set('items', response.data);
            }, (response) => {
                console.log('error');
            });
        }
    }
</script>
