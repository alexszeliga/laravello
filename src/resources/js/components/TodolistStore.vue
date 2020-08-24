<template>
    <div>
        <form method="post" :action="'/todolists/' + id">
            <input type="hidden" name="_token" :value="csrf">
            <input name="title" type="text" :value="oldTitle" />
            <input type="submit" name="submit" />
        </form>

    </div>
</template>

<script>
export default {
    props: ["todo-list"],
    mounted () {console.log(this.todoList)},
    data() {
        return {
            id: this.todoList.id,
            oldTitle: this.todoList.title,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        };
    }

};
</script>
