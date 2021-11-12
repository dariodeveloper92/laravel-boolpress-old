<template>
    <main>
        <div class="row">
            <div class="col-12">
                <ul>
                    <li v-for="post in posts" :key="post.id">
                        {{ post.title}}
                    </li>
                </ul>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: 'Main',
    data() {
        return{
            url: 'http://127.0.0.1:8000/api/posts',
            posts: [],
            api_token: '79938ff93f3e31c05b660bffed55ce1f'

        }
    },
    created(){
        this.getPosts();
    },
    methods: {
        getPosts() {
            //console.log('Chiamata API');

            const bodyParameters = {
                key: "value"
            };

            const config = {
                headers: { Authorization: `Bearer ${this.api_token}` }
            };

            axios.get(this.url, bodyParameters, config)
                .then(response => {
                   // console.log(response.data.results);
                   this.posts = response.data.results;
                })
                .catch();
        }
    }

}
</script>