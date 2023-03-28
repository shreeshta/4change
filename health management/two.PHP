<?phpconst express = require("express");
const bodyParser = require("body-parser");

const app = express();

// Middleware to parse the request body
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Endpoint to create a new profile
app.post("/create-profile", (req, res) => {
  const name = req.body.name;
  const email = req.body.email;
  const phone = req.body.phone;
  const username = req.body.username;
  const password = req.body.password;
  const profilePicture = req.body.profilePicture;
  const bio = req.body.bio;
  const interests = req.body.interests;
  
  // Code to create a new profile in the database
  // Example: const newProfile = await Profile.create({ name, email, phone, username, password, profilePicture, bio, interests });
  
  res.json({ message: "Profile created successfully" });
});

// Start the server
app.listen(3000, () => {
  console.log("Server started on port 3000");
});
?>