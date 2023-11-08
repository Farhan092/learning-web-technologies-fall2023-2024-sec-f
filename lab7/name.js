function validateName() {
  let name = document.getElementById('MyName').value;


  if (isEmptyString(name)) {
    document.getElementById('h1').innerHTML = 'Name cannot be empty!';
    return false; 
  }
  // else if (!hasAtLeastTwoWords(name)) {
  //   document.getElementById('h1').innerHTML = 'Name must contain at least two words!';
  // }
  else if (!isValidNameCharacters(name)) {
    document.getElementById('h1').innerHTML = 'Name can only contain letters, dot (.), or dash (-)';
    return false; 
  }
  // else if (!isValidNameStart(name)) {
  //   document.getElementById('h1').innerHTML = 'Name must start with a letter';
  //   return false; 
  // }
  else {
    document.getElementById('h1').innerHTML = name;
  }
}

function isEmptyString(str) {
  return str === null;
}

// function hasAtLeastTwoWords(name) {
//   let wordCount = 0;
//   let isWord = false;

//   for (let i = 0; i < name.length; i++) {
//     const c = name.charAt(i);
//     if (c === ' ' || c === '\t' || c === '\n') {
//       isWord = false;
//     } else if (!isWord) {
//       wordCount++;
//       isWord = true;
//     }
//   }

//   return wordCount >= 2;
// }
function isValidNameCharacters(name) {
  for (let i = 0; i < name.length; i++) {
    const c = name.charAt(i);
    if (!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') || c === '.' || c === '-')) {
      return false;
    }
  }
  return true;
}
// function isValidNameStart(name) {
//   const firstChar = name.charAt(0);
//   return (firstChar >= 'a' && firstChar <= 'z') || (firstChar >= 'A' && firstChar <= 'Z');
// }
