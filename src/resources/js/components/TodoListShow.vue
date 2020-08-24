<template>
    <li>
        <div>{{ todoList.title }}</div>
        <form :id="'delete-todolist-' + id " :action="'/todolists/' + id" method='post'>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" :form="'delete-todolist-' + id"  value="Delete">Delete</button>
            <a :href="'/todolists/' + id">Edit</a>
        </form>
    </li>

</template>

<script>
export default {
    props: ["todo-list"],
    mounted () { console.log(this.todoList.id) },
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            id: this.todoList.id
        };
    }
};
</script>

