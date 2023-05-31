"use strict";
const app = Vue.createApp({
    data() {
        return {
            input: "",
            articles: [],
            shoppingCart: [],
            pages : 0,
            selectedPage : 1,
            pageSize : 5
        };
    },
    watch: {
        input(newValue,oldValue){
            if(newValue.length >= 3){
                /*for(const article of this.articles){
                    if(article.name.includes(newValue)){
                        article.show = true;
                    }
                    else {
                        article.show = false;
                    }
                }*/
                fetch("http://localhost:8000/api/articles?search=" + newValue, {
                    method: "GET",
                    headers: {
                        Accept: "application/json",
                    },
                })
                    .then((data) => data.json())
                    .then((data) => JSON.parse(data))
                    .then((data) => {
                        this.articles = data;
                        for(const article of this.articles){
                            article.show = true;
                        }
                    });
            }
            else{
                /*for(const article of this.articles){
                    article.show = true;
                }*/
                fetch("http://localhost:8000/api/articles", {
                     method: "GET",
                     headers: {
                         Accept: "application/json",
                     },
                 })
                     .then((data) => data.json())
                     .then((data) => JSON.parse(data))
                     .then((data) => {
                         this.articles = data;
                         for(const article of this.articles){
                             article.show = true;
                         }
                     });
            }
        }
    },
    methods: {
        selectPage(page){
            this.selectedPage = page;
            const offset = (this.selectedPage - 1) * this.pageSize;
            const limit = this.pageSize;
            fetch("http://localhost:8000/api/articles?offset=" + offset + "&limit=" + limit, {
                method: "GET",
                headers: {
                    Accept: "application/json",
                },
            })
                .then((data) => data.json())
                .then((data) => JSON.parse(data))
                .then((data) => {
                    this.articles = data;
                    for(const article of this.articles){
                        article.show = true;
                    }
                });
        },
        updatePagenation(){
            this.pages = Math.ceil(this.articles.length / this.pageSize);
            this.selectPage(1);
        },
        toggleShoppingCart(id) {
            const user_id = $("#user_id").val();
            const article_id = id;
            let url = "";

            if (this.shoppingCart.includes(article_id)) {
                url =
                    "http://localhost:8000/user/" + user_id + "/removeItem/" + article_id;
                this.shoppingCart.splice(this.shoppingCart.indexOf(article_id), 1);
            } else {
                url =
                    "http://localhost:8000/user/" + user_id + "/addItem/" + article_id;
                this.shoppingCart.push(article_id);
            }

            fetch(url)
                .then((data) => data.json())
                .then((data) => {
                    console.log(data);
                });
        },
    },
    created() {
        fetch("http://localhost:8000/api/articles?", {
            method: "GET",
            headers: {
                Accept: "application/json",
            },
        })
            .then((data) => data.json())
            .then((data) => JSON.parse(data))
            .then((data) => {
                this.articles = data;
                for(const article of this.articles){
                    article.show = true;
                }
                this.updatePagenation();
            });
        fetch("http://localhost:8000/api/shoppingCart", {
            method: "GET",
            headers: {
                Accept: "application/json",
            },
        })
            .then((data) => data.json())
            .then((data) => JSON.parse(data))
            .then((data) => {
                this.shoppingCart = data.map((value) => value.id);
            });

    },
}).mount("#app");
