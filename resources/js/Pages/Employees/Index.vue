<script setup>

import { defineProps } from 'vue';
import {Link} from '@inertiajs/vue3';

defineProps({
    employees: Array,
})

</script>

<template>
    <div class="container">
        <Link :href="`/employees/create`">Create New Employee</Link>
        <div v-for="employee in employees" :key="employee.id">
            <h1>{{ employee.employee_id }}</h1>
            <p>{{ employee.name }}</p>
            <Link :href="`/employees/${employee.id}`">View Employee</Link> | 
            <Link :href="`/employees/${employee.id}/edit`">Edit Employee</Link> | 
            <Link :href="`/employees/${employee.id}`" method="DELETE">Delete Employee</Link>
            <hr/>
        </div>
    </div>
</template>