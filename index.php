// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyA6YQxpkgfXHlVwY8eDPEYXmH7dtG8v1R8",
  authDomain: "anonymous-chat-room-29023.firebaseapp.com",
  projectId: "anonymous-chat-room-29023",
  storageBucket: "anonymous-chat-room-29023.appspot.com",
  messagingSenderId: "793060982269",
  appId: "1:793060982269:web:b02f9600d82abf4a2fed94",
  measurementId: "G-7WX820X9MB"
};
var myName = prompt("Enter Your Nickname");

function sendMessage(){
  var message = document.getElementById("message").value;
  firebase.database.red("messages").push().set({
    "sender": myName,
    "message": message
  })
  return false;
}

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

<form>
  <input id="message" placeholder="enter message" autocomplete="off">
  <input type="submit">
</form>