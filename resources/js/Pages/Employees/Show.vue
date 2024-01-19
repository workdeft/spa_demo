<script setup>
import { defineProps } from 'vue';

defineProps({
    employee: Object,
})
</script>
<template>
    <div class="container">
        <h1>{{ employee.employee_id }}</h1>
        <p>{{ employee.name }}</p>
        <p>{{ employee.email }}</p>
        <p>{{ employee.phone }}</p>
        <hr/>
    </div>
</template>