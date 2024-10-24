#!/bin/bash

# Ensure script is being run inside the source directory
if [ ! -d ".git" ]; then
  echo "Error: Please run this script inside the pfSense source directory."
  exit 1
fi

# Get the script name to exclude it from renaming
SCRIPT_NAME=$(basename "$0")

# Define old and new branding for pfSense
OLD_LOWER="pfsense"
NEW_LOWER="libresense"

OLD_CAPS="PFSENSE"
NEW_CAPS="LIBRESENSE"

OLD_MIXED="pfSense"
NEW_MIXED="libresense"

# Define old and new company names (case-insensitive replacement for Netgate)
OLD_COMPANY="Netgate"
NEW_COMPANY="OpenSourceCompany"

# Function to safely move files only if the names are different
safe_mv() {
  if [ "$1" != "$2" ]; then
    mv "$1" "$2"
  fi
}

# Capture file permissions
capture_permissions() {
  find . -type f -exec stat --format="%a %n" {} \; > file_permissions.txt
}

# Restore file permissions
restore_permissions() {
  while IFS= read -r line; do
    perms=$(echo "$line" | cut -d ' ' -f 1)
    file=$(echo "$line" | cut -d ' ' -f 2-)
    chmod "$perms" "$file"
  done < file_permissions.txt
}

# Capture the permissions before making changes
echo "Capturing current file permissions..."
capture_permissions

# Replace case-sensitive pfSense -> libresense in files
echo "Replacing pfSense branding with libresense in files..."
find . -depth ! -path "./.git*" ! -name "$SCRIPT_NAME" -type f -exec sed -i -e "s/${OLD_LOWER}/${NEW_LOWER}/g" -e "s/${OLD_CAPS}/${NEW_CAPS}/g" -e "s/${OLD_MIXED}/${NEW_MIXED}/g" {} \;

# Case-insensitive replacement of Netgate -> MyCompany in files
echo "Replacing Netgate with MyCompany (case-insensitive)..."
find . -depth ! -path "./.git*" ! -name "$SCRIPT_NAME" -type f -exec sed -i "s/${OLD_COMPANY}/${NEW_COMPANY}/gI" {} \;

# Rename files containing "pfsense", "PFSENSE", "pfSense"
echo "Renaming files containing pfSense..."
find . -depth ! -path "./.git*" ! -name "$SCRIPT_NAME" -type f -name "*${OLD_LOWER}*" | while read file; do
  newfile=$(echo "$file" | sed "s/${OLD_LOWER}/${NEW_LOWER}/g")
  safe_mv "$file" "$newfile"
done

find . -depth ! -path "./.git*" ! -name "$SCRIPT_NAME" -type f -name "*${OLD_CAPS}*" | while read file; do
  newfile=$(echo "$file" | sed "s/${OLD_CAPS}/${NEW_CAPS}/g")
  safe_mv "$file" "$newfile"
done

find . -depth ! -path "./.git*" ! -name "$SCRIPT_NAME" -type f -name "*${OLD_MIXED}*" | while read file; do
  newfile=$(echo "$file" | sed "s/${OLD_MIXED}/${NEW_MIXED}/g")
  safe_mv "$file" "$newfile"
done

# Rename files containing "Netgate" (case-insensitive)
echo "Renaming files containing Netgate (case-insensitive)..."
find . -depth ! -path "./.git*" ! -name "$SCRIPT_NAME" -type f -iname "*${OLD_COMPANY}*" | while read file; do
  newfile=$(echo "$file" | sed "s/${OLD_COMPANY}/${NEW_COMPANY}/gI")
  safe_mv "$file" "$newfile"
done

# Restore the permissions after the renaming and rebranding
echo "Restoring original file permissions..."
restore_permissions

echo "File renaming and rebranding completed!"
