<template>
<section class="p-4 lg:flex lg:items-center">
    <div class="lg:w-1/2">
        <h3 class="text-center text-lg lg:text-xl font-title font-medium mb-8">
            {{ acf.titre_formulaire_de_contact }}
        </h3>
        <MainContactForm />
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
        <h3 class="text-center text-lg lg:text-xl font-title font-medium mb-8">
            {{ acf.bloc_confiance_titre }}
        </h3>
        <div class="flex flex-col items-center justify-center lg:flex-row lg:flex-wrap px-32">
            <carousel v-if="data !== null" :perPage="1">
                <slide class="px-8" v-for="item in data" :key="item.acf.auteur">
                    <div class="flex flex-col">
                        <div>
                            <img class="h-32" :src="item.acf.logo_or_image.url" alt="" />
                        </div>
                        <div>
                            <p class="font-bold">{{ item.acf.auteur }}</p>
                        </div>
                        <div>
                            {{ item.acf.description }}
                        </div>
                    </div>
                </slide>
            </carousel>
            <div v-else>
                <div class="flex justify-center items-center">
                    <img class="h-16" src="~/static/images/loading/loading.svg" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script>
export default {
    props: {
        acf: Object,
    },
    data() {
        return {
            data: null,
        };
    },
    async fetch() {
        this.data = await fetch(
            "https://admin.digitalrc.fr/wp-json/wp/v2/avis_clients"
        ).then((res) => {
            return res.json();
        });
    },
};
</script>
