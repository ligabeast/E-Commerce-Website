'use strict'
const SearchBar = document.querySelector('#SearchBar');
const SearchButton = document.querySelector('#SearchButton');
const Suggestions = document.querySelector('#suggestions');
const SuggestionOne = '<div onclick="takeAsInput(this)" class="h-12 text-blue-500 font-semibold text-lg hover:cursor-pointer hover:bg-zinc-300 w-full flex items-center justify-center"><span class="text-center">';
const SuggestionTwo = '</span></div>';

SearchBar.addEventListener('keyup',(e) => {
    if(SearchBar.value && SearchButton.classList.contains('bg-zinc-400')){
        SearchButton.classList.remove('bg-zinc-400');
        SearchButton.classList.add('bg-blue-500');
        SearchButton.classList.add('hover:bg-blue-700');
    }
    if (SearchBar.value){
        Suggestions.innerHTML = "";
        for (let [i, item] of getCategorys().entries()){
            if(i > 8){
                break;
            }
            Suggestions.innerHTML += SuggestionOne + item.name + SuggestionTwo;
        }
    }
    if(!SearchBar.value){
        SearchButton.classList.remove('bg-blue-500');
        SearchButton.classList.remove('hover:bg-blue-700');
        SearchButton.classList.add('bg-zinc-400');
        Suggestions.innerHTML = "";
    }
})

SearchButton.addEventListener('click', (e) => {
    if(!SearchBar.value){
        e.preventDefault();
    }
});

function takeAsInput(e){
    SearchBar.value = e.innerText;
    Suggestions.innerHTML = "";
}

function getCategorys(){
    const input = SearchBar.value.toLowerCase();
    return Categorys.filter(word => word.name.toLowerCase().includes(input));
}
