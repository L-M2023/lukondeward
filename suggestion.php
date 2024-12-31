<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Suggestions</title>
    <style>
        /* Basic Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 70px; /* Adjust for fixed header */
        }

        h1 {
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        /* Fixed Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .suggestion-form, .comment-form {
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .suggestion {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        .comment {
            padding: 10px;
            border-top: 1px solid #ddd;
            margin-top: 10px;
        }

        /* Footer Styling */
        .footer {
            margin-top: auto;
            
            color: white;
            text-align: center;
            padding: 20px 100px;
            display: flex;
            flex-direction: column;
            width: 85%;
            align-items: center;
            background-color: black;
            border-top-right-radius: 40px; border-top-left-radius: 40px;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer .footer-links, .footer .social-icons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 10px;
        }
        .footer a {
            color: #ddd;
            text-decoration: none;
            font-size: 14px;
        }
        .footer a:hover {
            color: #fff;
        }
        .footer .social-icons a {
            font-size: 20px;
            color: #ddd;
            transition: color 0.3s;
        }
        .footer .social-icons a:hover {
            color: #007BFF;
        }

        /* Fixed Header */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color:  #802f3b;
            color: white;
            padding: 30px 0px;
            text-align: right;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;
        }
        
        /* Header Links */
        .header a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 14px;
        }

        .header a:hover {
            color: #ddd;
            font-size: 15px;
        }

       
        
    </style>
</head>
<body>

    <!-- Fixed Header -->
    <div class="header">
    <a href="dashboard.php">DASHBOARD</a>
                    <a class="nav-link" href="home.php">MEEETINGS</a>
                    <a class="nav-link" href="suggestion.php">SUGGESTION//BOX</a>
                    <a class="nav-link" href="testing12.php"> <span class="bell-icon">🔔</span>
                    <span class="notification-count">3</span></a>
                    <a style=" background-color: #007BFF; border-radius:5px; padding: 5px 10px;" class="nav-link" href="logout.php">Logout</a>
    </div>

  


    <h1 style=" color: white; background-color:  #802f3b; box-shadow: 0 20px 30px rgb(5, 7, 6); padding:30px 100px;">Community Suggestions</h1>

    <div class="container">
        <div class="suggestion-form">
            <h2>Submit a Suggestion</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" required>

            <label for="suggestion-title">Title:</label>
            <input type="text" id="suggestion-title" required>

            <label for="suggestion-content">Content:</label>
            <textarea id="suggestion-content" rows="4" required></textarea>

            <button onclick="submitSuggestion()">Submit Suggestion</button>
        </div>

        <h2>Previous Suggestions</h2>
        <div id="suggestions-container">
            <!-- Suggestions will be dynamically loaded here -->
        </div>
    </div>

    <!-- Cool Footer -->
    

        
    <div class="footer">
        <div class="row">
            <div class="col-md-6">
                  <p>&copy; FixMyStreet. All Rights Reserved.</p>
                <p>Designed and Maintained By Lillian Membele</p>
                <p>SIN: 1912201425</p>
            </div><br>
            <div class="col-md-6 text-md-right">
                <p>Email: <a href="mailto:info@fixmystreet.com" style="color: #ffffff; font-size: 14px; ">membelelillian@gmail.com</a></p>
                <p>Phone: <a href="tel:+260123456789" style="color: #ffffff; font-size: 14px;">0977827292</a></p>
                <p>
                    Follow us: 
                    <a href="http://facebook.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://twitter.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-twitter"></i></a>
                    <a href="http://instagram.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-instagram"></i></a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="credits">
                    <strong><a href="http://icuzambia.net" style="color: #ffffff;">ICU Zambia</a> // <a href="http://zrdc.org" style="color: #ffffff;">ZRDC</a></strong>
                </div>
            </div>
        </div>
    </div>


<!-- Add Font Awesome for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </div>

    

    <script>
        async function fetchSuggestions() {
            const response = await fetch("fetch.php");
            const suggestions = await response.json();
            const container = document.getElementById("suggestions-container");
            container.innerHTML = "";

            suggestions.forEach(suggestion => {
                const suggestionElement = document.createElement("div");
                suggestionElement.classList.add("suggestion");
                suggestionElement.innerHTML = `
                    <h3>${suggestion.title}</h3>
                    <p>${suggestion.content}</p>
                    <small>Submitted on: ${suggestion.date}</small>
                    <div class="comments">
                        <h4>Comments</h4>
                        ${suggestion.comments.map(comment => `
                            <div class="comment">
                                <p>${comment.comment}</p>
                                <small>${comment.date}</small>
                            </div>
                        `).join('')}
                        <div class="comment-form">
                            <label>Add a comment:</label>
                            <input type="text" id="comment-${suggestion.id}">
                            <button onclick="submitComment(${suggestion.id})">Add Comment</button>
                        </div>
                    </div>
                `;
                container.appendChild(suggestionElement);
            });
        }

        async function submitSuggestion() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const title = document.getElementById("suggestion-title").value;
            const content = document.getElementById("suggestion-content").value;

            await fetch("submit.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ name, email, title, content })
            });

            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("suggestion-title").value = "";
            document.getElementById("suggestion-content").value = "";
            fetchSuggestions();
        }

        async function submitComment(suggestionId) {
            const commentInput = document.getElementById(`comment-${suggestionId}`);
            const comment = commentInput.value;

            await fetch("comment.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ suggestionId, comment })
            });

            commentInput.value = "";
            fetchSuggestions();
        }

        document.addEventListener("DOMContentLoaded", fetchSuggestions);
    </script>

    
</body>
</html>
