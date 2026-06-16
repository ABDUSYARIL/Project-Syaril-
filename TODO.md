# Tailwind CSS Cleanup Plan

## Steps (6/8 complete):

- [x] Step 1: Update \`resources/views/layouts/app.blade.php\` - Remove Bootstrap, add Vite/Tailwind, optimize parallax/dark mode CSS
- [x] Step 2: Update \`resources/views/partials/nav.blade.php\` - Convert to Tailwind navbar
- [x] Step 3: Update \`resources/views/home.blade.php\` - Replace Bootstrap grid/buttons with Tailwind
- [x] Step 4: Update \`resources/views/profil.blade.php\` - Convert inline styles to Tailwind (cards, skills, portfolio)
- [x] Step 5: Update \`resources/views/kontak.blade.php\` - Tailwind card
- [x] Step 6: Update \`resources/views/partials/footer.blade.php\` - Tailwind styling

**Final Steps:**

- [ ] Step 7: Run `cd project_Syaril2026 && npm run dev` (build Tailwind assets)
- [ ] Step 8: Run `php artisan view:clear && php artisan config:cache`
- [ ] Step 9: Test all pages (http://localhost/home, /profil, /kontak)
