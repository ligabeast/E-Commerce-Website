'use strict'
const SearchBar = document.querySelector('#SearchBar');
const SearchButton = document.querySelector('#SearchButton');

SearchBar.addEventListener('keyup',(e) => {
    if(SearchBar.value && SearchButton.classList.contains('bg-zinc-400')){
        SearchButton.classList.remove('bg-zinc-400');
        SearchButton.classList.add('bg-blue-500');
        SearchButton.classList.add('hover:bg-blue-700');
    }
    if(!SearchBar.value){
        SearchButton.classList.remove('bg-blue-500');
        SearchButton.classList.remove('hover:bg-blue-700');
        SearchButton.classList.add('bg-zinc-400');
    }
})
