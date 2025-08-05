<script setup>

</script>

<template>
      <div v-if="$page.props.flash.status === 'success'" class="bg-blue-200 py-4">
    {{ $page.props.flash.message }}
  </div>


  <div v-if="$page.props.flash.status === 'danger'" class="bg-red-200 py-4">
    {{ $page.props.flash.message }}
  </div>
</template>
