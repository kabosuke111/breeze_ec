(function() {
    addEventListener('DOMContentLoaded', ()=>{
        const root = document.querySelector('.searchBtn');
        console.log(root);
        const items = root.getElementsByClassName("btns");
        const searchBox = document.querySelector('.is-search-input');
    
        let wordArr = [];
        Array.from(items).forEach((item)=>{
            item.addEventListener('click', (e)=>{
                const index = wordArr.indexOf(e.target.value);
                if(index !== -1) {
                    wordArr = wordArr.filter((_, i) => i !== index);
                } else {
                    wordArr.push(e.target.value);
                }
                console.log(wordArr);
            });
        });
    });

})()