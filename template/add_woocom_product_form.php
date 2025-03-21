<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        .wcp_custom_plugin body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .wcp_custom_plugin .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .wcp_custom_plugin h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .wcp_custom_plugin .form-group {
            margin-bottom: 20px;
        }

        .wcp_custom_plugin label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .wcp_custom_plugin input[type="text"],
        .wcp_custom_plugin input[type="number"],
        .wcp_custom_plugin textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .wcp_custom_plugin input[type="text"]:focus,
        .wcp_custom_plugin input[type="number"]:focus,
        .wcp_custom_plugin textarea:focus {
            outline: none;
            border-color: #6c5ce7;
        }

        .wcp_custom_plugin textarea {
            resize: vertical;
            min-height: 100px;
        }

        .wcp_custom_plugin .price-group {
            display: flex;
            gap: 20px;
        }

        .wcp_custom_plugin .price-group .form-group {
            flex: 1;
        }

        .wcp_custom_plugin .image-upload {
            position: relative;
            text-align: center;
        }

        .wcp_custom_plugin input[type="file"] {
            display: none;
        }

        .wcp_custom_plugin .upload-btn {
            display: inline-block;
            padding: 12px 25px;
            background: #6c5ce7;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .wcp_custom_plugin .upload-btn:hover {
            background: #5a4cd1;
        }

        .wcp_custom_plugin .submit-btn {
            width: 100%;
            padding: 15px;
            background: #2ecc71;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .wcp_custom_plugin .submit-btn:hover {
            background: #27ae60;
        }
    </style>
</head>
<body class="wcp_custom_plugin">
    <div class="container">
        <h1>Add New Product</h1>
        <form class="wcp_custom_plugin">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter product name" required>
            </div>

            <div class="price-group">
                <div class="form-group">
                    <label for="regular-price">Regular Price</label>
                    <input type="number" id="regular-price" name="regular-price" step="0.01" placeholder="$0.00" required>
                </div>
                <div class="form-group">
                    <label for="sale-price">Sale Price</label>
                    <input type="number" id="sale-price" name="sale-price" step="0.01" placeholder="$0.00">
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter product description" required></textarea>
            </div>

            <div class="form-group">
                <label for="short-description">Short Description</label>
                <textarea id="short-description" name="short-description" placeholder="Enter short description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" id="sku" name="sku" placeholder="Enter product SKU" required>
            </div>

            <div class="form-group image-upload">
                <label for="product-image">Product Image</label>
                <label class="upload-btn">
                    Upload Image
                    <input type="file" id="product-image" name="product-image" accept="image/*">
                </label>
            </div>

            <button type="submit" class="submit-btn">Add Product</button>
        </form>
    </div>
</body>
</html>