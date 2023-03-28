const profileForm = document.getElementById("profileForm");

profileForm.addEventListener("submit", (event) => {
  event.preventDefault();
  
  const name = profileForm.name.value;
  const email = profileForm.email.value;
  const phone = profileForm.phone.value;
  const username = profileForm.username.value;
  const password = profileForm.password.value;
  const profilePicture = profileForm.profilePicture.value;
  const bio = profileForm.bio.value;
  const interests = profileForm.interests.value;
  
  // Send the data to the server to create the profile
  // Example: fetch("/create-profile", { method: "POST", body: { name, email, phone, username, password, profilePicture, bio, interests } });
});