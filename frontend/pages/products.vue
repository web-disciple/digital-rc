<template>
<div v-if="this.data === null">
    <div style="
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
      ">
        <img class="h-16" src="~/static/images/loading/loading.svg" alt="" />
    </div>
</div>
<div v-else class="mt-24 lg:mt-32 max-w-screen-xl mx-auto p-4">
    <h1 class="text-2xl font-bold font-normal">Nos produits et services</h1>
    <p>
        <br />
        Voici une liste non exhaustives de nos produits et services.
        <br />
        Sélectionner ceux qui vous intéresse le plus et entrons en contact.
    </p>
    <ul class="lg:flex lg:flex-row lg:flex-wrap">
        <li v-for="item in data" :key="item.id" class="p-4 lg:w-1/2 lg:p-8 block">
            <p class="font-bold text-lg">{{ item.acf.titre_du_produit }}</p>
            <carousel :perPage="1" class="m-4">
                <slide v-if="item.acf.image_produit_1.url" class="flex justify-center">
                    <img class="p-4" :src="item.acf.image_produit_1.url" alt="" />
                </slide>
                <slide v-if="item.acf.image_produit_2.url" class="flex justify-center">
                    <img class="p-4" :src="item.acf.image_produit_2.url" alt="" />
                </slide>
                <slide v-if="item.acf.image_produit_3.url" class="flex justify-center">
                    <img class="p-4" :src="item.acf.image_produit_3.url" alt="" />
                </slide>
                <slide v-if="item.acf.image_produit_4.url" class="flex justify-center">
                    <img class="p-4" :src="item.acf.image_produit_4.url" alt="" />
                </slide>
            </carousel>
            <p>{{ item.acf.description_du_produit }}</p>
        </li>
    </ul>
</div>
</template>

<script>
export default {
    head: {
        title: "Digital RC - Contact - Imprimantes professionnelles",
        meta: [{
            hid: "description",
            name: "description",
            content: "Vente ou location de photocopieurs récents de la marque RICOH avec ou sans contrat de maintenance.",
        }, ],
    },
    data() {
        return {
            data: null,
        };
    },
    async fetch() {
        this.data = await fetch(
            "https://admin.digitalrc.fr/wp-json/wp/v2/produit"
        ).then((res) => {
            return res.json();
        });
        console.log(this.data);
    },
};
</script>
