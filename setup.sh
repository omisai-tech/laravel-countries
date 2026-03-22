#!/bin/bash

echo "PHP Package Skeleton Setup"
echo "=========================="

read -p "Enter the package name: " package_name
read -p "Enter the package description: " description
read -p "Enter the author name: " author_name
read -p "Enter the author email: " author_email

echo ""
echo "Replacing placeholders in all files..."
echo "Package Name: $package_name"
echo "Description: $description"
echo "Author Name: $author_name"
echo "Author Email: $author_email"
echo ""

find . -type f -not -path './.git/*' -not -name 'setup.sh' -exec sed -i "s/<package_name>/$package_name/g" {} +
find . -type f -not -path './.git/*' -not -name 'setup.sh' -exec sed -i "s/<package_description>/$description/g" {} +
find . -type f -not -path './.git/*' -not -name 'setup.sh' -exec sed -i "s/<author_name>/$author_name/g" {} +
find . -type f -not -path './.git/*' -not -name 'setup.sh' -exec sed -i "s/<author_email>/$author_email/g" {} +

echo "Replacement complete!"
echo "You can now customize the package further."