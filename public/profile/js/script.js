const txtElement = ['Data Scientist', 'Full Stack Web Developer'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function typingEffect() {
    if (count == txtElement.length) count = 0;

    currentTxt = txtElement[count];

    words = currentTxt.slice(0, ++txtIndex);
    document.querySelector('.typing-efffect').textContent = words;

    if (words.length == currentTxt.length) {
        count++;
        txtIndex = 0;
    }
    setTimeout(typingEffect, 150);
})();