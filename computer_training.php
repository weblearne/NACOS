

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Training Application</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }
        
        .logo {
            width: 100px;
            height: auto;
            margin-bottom: 15px;
        }
        
        h2 {
            font-size: 1.5em;
            margin-bottom: 15px;
            font-family: serif;

        }
        
        .title-green {
            color: #008000;
        }
        
        .title-black {
            color: #000;
        }
        
        .marquee-container {
            background-color: #f0f0f0;
            padding: 8px;
            margin: 15px 0;
            border-radius: 5px;
            overflow: hidden;
        }
        
        form {
            margin: 20px 0;
            text-align: left;
        }
        
        fieldset {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        legend {
            font-weight: bold;
            color: #000;
            padding: 0 5px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        
        input[type="submit"] {
            width: 100%;
            background-color: #008000;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #006400;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .inquiry-section {
            margin-top: 25px;
            font-size: 16px;
            text-align: center;
        }
        
        .whatsapp-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #25D366;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .whatsapp-icon {
            width: 24px;
            height: 24px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            
            h2 {
                font-size: 1.3em;
            }
            
            fieldset {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="NACOSLOGO.jpg" alt="NACOSLOGO Logo" class="logo">
        <h2 class="title-green">AUDU BAKO COLLEGE OF AGRICULTURE, DAMBATTA, KANO STATE</h2>
        <h3 class="title-black">DEPARTMENT OF Computer Science</h3>
        <h3 class="title-green">ABCOAD CyberMart</h3>
        <br>
        <h3 class="title-black">Computer Training Application Form</h3>
        
        <div class="marquee-container">
            <marquee>2024/2025 Training Session</marquee>
        </div>
        
        <form method="POST" action="" id="trainingForm">
            <fieldset>
                <legend>Applicant Info</legend>
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" name="first_name" required>
                </div>
                <div class="form-group">
                    <label>Surname:</label>
                    <input type="text" name="surname" required>
                </div>
                <div class="form-group">
                    <label>Middle Name (Optional):</label>
                    <input type="text" name="middle_name">
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Contact Address</legend>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="contact_address" required>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Contact Details</legend>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="tel" name="phone_number" required>
                </div>
                <div class="form-group">
                    <label>Gender:</label>
                    <select name="gender" required>
                        <option value="">-- Select Gender --</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Religion:</label>
                    <select name="religion" required>
                        <option value="">-- Select Religion --</option>
                        <option value="Islam">Islam</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Personal Details</legend>
                <div class="form-group">
                    <label>Date of Birth:</label>
                    <input type="date" name="date_of_birth" required>
                </div>
                <div class="form-group">
                    <label>Marital Status:</label>
                    <select name="marital_status" required>
                        <option value="">-- Select Status --</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Education Level</legend>
                <div class="form-group">
                    <label>Level of Study:</label>
                    <select name="level_of_study" required>
                        <option value="">-- Select Level --</option>
                        <option value="PRI">PRI</option>
                        <option value="SSCE">SSCE</option>
                        <option value="UNDERGRADUATE">UNDERGRADUATE</option>
                        <option value="GRADUATE">GRADUATE</option>
                        <option value="POST GRADUATE">POST GRADUATE</option>
                    </select>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Parent/Guardian Info</legend>
                <div class="form-group">
                    <label>Full Name:</label>
                    <input type="text" name="guardian_name" required>
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="tel" name="guardian_phone" required>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Professional Computer Training Programmes</legend>
                <div class="form-group">
                    <label>Programme:</label>
                    <select name="training_programme" required>
                        <option value="">-- Select Programme --</option>
                        <option value="Diploma in Information Technology">Diploma in Information Technology</option>
                        <option value="Diploma in Computer Appreciation">Diploma in Computer Appreciation</option>
                        <option value="Certificate in Information Technology">Certificate in Information Technology</option>
                        <option value="Certificate in Microsoft Word">Certificate in Microsoft Word</option>
                        <option value="Certificate in Microsoft Excel">Certificate in Microsoft Excel</option>
                        <option value="Certificate in Microsoft PowerPoint">Certificate in Microsoft PowerPoint</option>
                        <option value="Certificate in Graphics Design">Certificate in Graphics Design</option>
                    </select>
                </div>
            </fieldset>
            
            <input type="submit" value="Submit Application">
        </form>
        
        <div class="inquiry-section">
            <p>For further inquiries, contact the Admin:</p>
            <a href="https://wa.me/2347043527649" class="whatsapp-link">
                <img src="whatsapp.png" class="whatsapp-icon" alt="WhatsApp">
                Chat on WhatsApp
            </a>
        </div>
    </div>

    <script>
        document.getElementById('trainingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission (you'll handle this with PHP)
            Swal.fire({
                title: 'Success!',
                text: 'Your application has been submitted successfully.',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#008000'
            }).then(() => {
                // Optionally reset form or redirect
                // document.getElementById('trainingForm').reset();
            });
        });
    </script>
</body>
</html>