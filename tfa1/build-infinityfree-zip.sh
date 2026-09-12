#!/usr/bin/env bash
set -e

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
TMP_DIR="/tmp/tfa1-deploy-$$"
OUTPUT_ZIP="$DIR/tfa1-infinityfree.zip"

echo "==> Packaging lean production build for InfinityFree (tfa1.freedev.app)..."
rm -rf "$TMP_DIR" "$OUTPUT_ZIP"
mkdir -p "$TMP_DIR"

# Copy non-hidden source files, excluding development dirs and documentation
rsync -av \
  --exclude=".*" \
  --exclude="vendor" \
  --exclude="tests" \
  --exclude="build" \
  --exclude="*.docx" \
  --exclude="*.zip" \
  --exclude="build-infinityfree-zip.sh" \
  "$DIR/" "$TMP_DIR/" > /dev/null

# Copy essential hidden/config files
cp "$DIR/.htaccess" "$TMP_DIR/.htaccess"
[ -f "$DIR/public/.htaccess" ] && cp "$DIR/public/.htaccess" "$TMP_DIR/public/.htaccess"

# Use production env for InfinityFree
if [ -f "$DIR/.env.infinityfree" ]; then
    cp "$DIR/.env.infinityfree" "$TMP_DIR/.env"
elif [ -f "$DIR/.env" ]; then
    cp "$DIR/.env" "$TMP_DIR/.env"
fi

# Ensure writable subdirectories exist with index.html
mkdir -p "$TMP_DIR/writable/cache" "$TMP_DIR/writable/logs" "$TMP_DIR/writable/session" "$TMP_DIR/writable/uploads" "$TMP_DIR/writable/debugbar"
for d in cache logs session uploads debugbar; do
    [ ! -f "$TMP_DIR/writable/$d/index.html" ] && [ -f "$DIR/writable/index.html" ] && cp "$DIR/writable/index.html" "$TMP_DIR/writable/$d/index.html"
done

# Install lean production vendor dependencies (no PHPUnit, dev tools, etc.)
cd "$TMP_DIR"
composer install --no-dev --optimize-autoloader --no-interaction --quiet

# Create deployment zip
zip -r "$OUTPUT_ZIP" . -x "*.DS_Store" > /dev/null
rm -rf "$TMP_DIR"

echo "==> Build successful!"
echo "Archive: $OUTPUT_ZIP"
ls -lh "$OUTPUT_ZIP"
