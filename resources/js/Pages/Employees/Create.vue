<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  employee_id: null,
  name: null,
  email: null,
  phone: null,
})
</script>

<template>
  <form @submit.prevent="form.post('/employees')">
    <input type="text" v-model="form.employee_id">
    <div v-if="form.errors.employee_id">{{ form.errors.employee_id }}</div>
    <input type="text" v-model="form.name">
    <div v-if="form.errors.name">{{ form.errors.name }}</div>
    <input type="text" v-model="form.email">
    <div v-if="form.errors.email">{{ form.errors.email }}</div>
    <input type="text" v-model="form.phone">
    <div v-if="form.errors.phone">{{ form.errors.phone }}</div>
    <button type="submit" :disabled="form.processing">Create</button>
  </form>
</template>