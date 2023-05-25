<script setup>

defineProps({

    data() {
        return {
            content: ''
        }
    },

    method: {
        tweetStore() {
            alert(this.content)
        }
    },


});
</script>

<template>
    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <!-- submit.prevent nous permet de soumettre notre formulaire  -->
            <form @submit.prevent="tweetStore">
                <textarea v-model="content" placeholder="Que se passe-t-il ?" class="rounded-lg border border-gray-200 w-full p-2 font-semibold resize-none focus:outline-none" ></textarea>
                <!-- le v-if nous permet de récuperer nos erreurs  -->
                <span class="my-5 text-red-500" v-if="$page.errors.content" >
                   {{ $page.errors.content }}
                </span>
                <div class="flex items-center space-x-4 justify-end mt-3">
                    <p class="text-sm text-gray-400 font-thin" >25 caractères restants</p>
                    <button  class="bg-white text-blue-500 cursor-pointer px-5 py-2 hover:text-white border border-blue-500 leading-tight hover:bg-blue-800 rounded-full font-extrabold transition-all duration-300">Tweet</button>
                </div>
            </form>
        </div>
    </div>
</template>
