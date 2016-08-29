@extends('layouts.app')
@section('content')
    <example></example>
@endsection
<script>
    var vm = new Vue({
        el: '#example',
        data: {
            a: 1
        },
        computed: {
            // 一个计算属性的 getter
            b: function () {
                // `this` 指向 vm 实例
                return this.a + 1
            }
        }
    })
</script>
