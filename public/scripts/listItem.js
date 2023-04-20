const imageContainer = document.querySelector('#imageUpload');
const videoContainer = document.querySelector('#videoUpload');
const dropZone = document.querySelector('#dropZone');
let imageArray = [];

function getImageObject(URL,counter){
    const div = document.createElement('div');
    div.classList.add('group','relative');
    const img = document.createElement('img');
    img.classList.add('w-48','h-48','border','border-black','p-4');
    img.src=URL;
    const div2 = document.createElement('div');
    div2.classList.add('bg-black','absolute','h-14','flex','flex-col','items-center','justify-center','w-full','bottom-0','opacity-0','transition','group-hover:opacity-80');
    const p = document.createElement('p');
    p.classList.add('text-white','font-semibold','text-sm','pointer-event-none','w-full','text-center','cursor-default');
    p.innerText = 'Foto Nummer: '+counter;
    const a = document.createElement('a');
    a.classList.add('text-white','font-semibold','text-sm','underline','cursor-pointer','px-5');
    a.onclick = deleteImageOrVideo
    a.innerText = 'Entfernen';
    div.appendChild(img);
    div.appendChild(div2);
    div2.appendChild(p);
    div2.appendChild(a)
    return div;
}

function loadImageInWebsite(event){
    if(imageArray.length < 5) {
        const file = event.dataTransfer.files[0];
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.addEventListener('loadend', () => {
            imageArray.push(getImageObject(reader.result, imageArray.length + 1));
            dropZone.appendChild(imageArray.at(imageArray.length - 1));
        });
    }
}

function deleteImageOrVideo(e){
    imageArray.splice(imageArray.indexOf(e.target.parentElement.parentElement), 1);
    e.target.parentElement.parentElement.remove();
    updateImageNumbers();
}

function updateImageNumbers(){
    for(const [index, element] of imageArray.entries()){
        element.children[1].children[0].innerText = 'Foto Nummer: '+ (index+1);
    }
}

imageContainer.addEventListener('dragenter',(e) => { //dragenter calls one time at beginning vs dragover multiple times
    e.preventDefault();
   imageContainer.classList.add('bg-gray-200');
});

imageContainer.addEventListener('dragleave',(e) => {
    e.preventDefault();
    imageContainer.classList.remove('bg-gray-200');
});

imageContainer.addEventListener('dragover',(e) => {
    e.preventDefault();
});

imageContainer.addEventListener('drop', (e) => {
    e.preventDefault();
    loadImageInWebsite(e);
});

videoContainer.addEventListener('dragenter',(e) => {
    e.preventDefault();
    videoContainer.classList.add('bg-gray-200');
});

videoContainer.addEventListener('dragleave',(e) => {
    e.preventDefault();
    videoContainer.classList.remove('bg-gray-200');
});

videoContainer.addEventListener('dragover',(e) => {
    e.preventDefault();
});

videoContainer.addEventListener('drop', (e) => {
    e.preventDefault();
    loadImageInWebsite(e);
});
