#!/bin/bash
# Run Invenza website locally with PHP built-in server
# Usage: ./run-local.sh   OR   bash run-local.sh

cd "$(dirname "$0")"
echo "Starting server at http://localhost:8000"
echo "Press Ctrl+C to stop"
php -S localhost:8000
