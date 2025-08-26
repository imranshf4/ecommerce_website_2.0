<script setup>
import { onMounted, onUnmounted, ref } from 'vue'
import { RouterLink, useRoute } from 'vue-router';
const isOpen = ref(false)
const toggleMenu = () => (isOpen.value = !isOpen.value)
const route = useRoute();
const isScrolled = ref(0);
const handleScroll = () => {
    isScrolled.value = window.scrollY > 10;
}
onMounted(() => {
    window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll)
})
</script>

<template>
    <nav>
        <RouterLink to="/" class="logo">Admin</RouterLink>
        <ul :class="{ 'open-menu': isOpen }">
            <li>
                <RouterLink to="/" :class="{ active: route.path === '/' }">Home</RouterLink>
            </li>
            <li>
                <RouterLink to="/about" :class="{ active: route.path === '/about' }">About</RouterLink>
            </li>
        </ul>
    </nav>
</template>