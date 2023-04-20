const imageContainer = document.querySelector('#imageUpload');
const videoContainer = document.querySelector('#videoUpload');
const dropZone = document.querySelector('#dropZone');
let counterImages = 1;
const ImageOne = '<div class="group relative">\n' +
    '                <img src ="';
const ImageTwo = '" class="w-48 h-48 border border-black p-4">' +
    '                <div class="bg-black absolute h-14 flex flex-col items-end justify-center w-full bottom-0 opacity-0 transition group-hover:opacity-80">\n' +
    '                    <p class="text-white font-semibold text-sm pointer-event-none w-full text-center cursor-default">Foto Nummer: ';
const ImageThree = '</p> '+
    '                        <a onclick="deleteImageOrVideo(this)" class="text-white font-semibold text-sm underline cursor-pointer px-5">Entfernen</a>' +
    '                    </div>' +
    '                </div>';


function loadImageInWebsite(event){
    const file = event.dataTransfer.files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.addEventListener('loadend',() => {
        dropZone.innerHTML += ImageOne + reader.result + ImageTwo + counterImages + ImageThree;
        counterImages++;
    });
}

function deleteImageOrVideo(e){
    e.parentElement.parentElement.remove();
    counterImages--;
}

imageContainer.addEventListener('dragenter',(e) => { //calls dragover one time at beginning vs dragover event multiple times
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

videoContainer.addEventListener('dragenter',(e) => { //calls dragover one time at beginning vs dragover event multiple times
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
