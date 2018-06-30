const copyButton = document.querySelector("#copy-button");
const copyArea = document.querySelector("#copy-area");
const debugText = document.querySelector("#debug-text");
let copiedText = "";

copyButton.addEventListener("click", (e) => {
    copyArea.select();

    try {
        copiedText = document.execCommand("copy");
        debugText.textContent = "You have successfully copied the text and can now paste it!";
    }catch(err) {
        debugText.textContent = "The text was not able to be succesfully copied!";
    }
});
