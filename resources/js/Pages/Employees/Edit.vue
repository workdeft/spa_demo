<script setup>
import { useForm } from '@inertiajs/vue3'
import { defineProps } from 'vue';

let props = defineProps({
    employee: Object,
})

const form = useForm({
  employee_id: props.employee.employee_id,
  name: props.employee.name,
  email: props.employee.email,
  phone: props.employee.phone,
})
</script>

<template>
  <form @submit.prevent="form.put(`/employees/${employee.id}`)">
    <input type="text" v-model="form.employee_id">
    <div v-if="form.errors.employee_id">{{ form.errors.employee_id }}</div>
    <input type="text" v-model="form.name">
    <div v-if="form.errors.name">{{ form.errors.name }}</div>
    <input type="text" v-model="form.email">
    <div v-if="form.errors.email">{{ form.errors.email }}</div>
    <input type="text" v-model="form.phone">
    <div v-if="form.errors.phone">{{ form.errors.phone }}</div>
    <button type="submit" :disabled="form.processing">Update</button>
  </form>
</template>