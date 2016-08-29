<template>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        一个技术博客
                    </h2>
                    <h3 class="post-subtitle">
                        一个技术博客一个技术博客一个技术博客一个技术博客一个技术博客一个技术博客
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Sun</a> on Oct 29, 2016</p>
            </div>
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">查看更多 &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        ready() {
            console.log('post list ready.');
            this.$http.get('api/home', {foo: 'bar'}).then((response) => {
                response.status;
                this.$set('someData', response.json());
                console.log(response.json());
            }, (response) => {
                console.log('error');
            });
        }
    }
</script>
