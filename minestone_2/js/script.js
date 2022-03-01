console.log("Vue ok", Vue);

Vue.config.devtools = true;

const app = new Vue({
    el: "#root",
    data: {
        albums: [],
        search: "",
    },
    methods: {
        searchAlbums() {
            axios
                .get("http://localhost/php-ajax-dischi/minestone_2/api/data.php")
                .then((res) => {
                    this.albums = res.data;

                    if (this.search !== "") {
                        this.albums = this.albums.filter((album) => {
                            return album.title
                                .toLowerCase()
                                .includes(this.search.toLowerCase());
                        });
                    }
                });
        },
    },
    mounted() {
        this.searchAlbums();
    },
});