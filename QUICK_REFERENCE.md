# Aviation ABA Design System - Quick Reference

## 🎨 Colors

### Primary
- `--captain-blue` `#1A365D` - Main text & headings
- `--sky-blue` `#87CEEB` - Interactive elements, hover
- `--cloud-light` `#E0F7FA` - Light backgrounds

### Accent
- `--warm-coral` `#FF6B6B` - Primary CTA buttons
- `--sunlight` `#F4A261` - Secondary accents
- `--cloud-grey` `#F7F9FC` - Alt section background

### Text
- `--text-dark` `#1A365D` - Body text (Captain's Blue)
- `--text-medium` `#546E7A` - Secondary text
- `--text-light` `#90A4AE` - Tertiary text

## 🔤 Typography Classes

```html
<!-- Headings - Use Montserrat/Poppins -->
<h1 class="font-montserrat text-captain-blue">Large Title</h1>
<h2 class="font-poppins font-bold">Section Title</h2>

<!-- Body Text - Use Open Sans/Lato -->
<p class="font-open-sans text-text-dark">Paragraph</p>
```

## 🔘 Buttons

```html
<!-- Primary (Warm Coral) - Use for CTAs -->
<a href="#" class="btn btn-primary">Contact Us</a>

<!-- Secondary (Sky Blue) -->
<a href="#" class="btn btn-secondary">Learn More</a>

<!-- Outline (Captain's Blue) -->
<a href="#" class="btn btn-outline">View Details</a>
```

**Hover Effect**: `translateY(-3px)` with enhanced shadow

## 📦 Cards

```html
<!-- Standard Card -->
<div class="card">
  <h3>Title</h3>
  <p>Content</p>
</div>

<!-- Small Card -->
<div class="card card-sm">Content</div>

<!-- Large Card -->
<div class="card card-lg">Content</div>
```

**Hover**: Lift effect with shadow enhancement

## 📝 Forms

```html
<label class="form-label">Label</label>
<input type="email" class="form-input" placeholder="...">

<label class="form-label">Message</label>
<textarea class="form-input"></textarea>
```

**Focus**: Sky Blue border + Cloud Light background

## 🎯 Icon Circles

```html
<!-- Sky Blue Gradient -->
<div class="icon-circle">
  <svg><!-- icon --></svg>
</div>

<!-- Warm Coral Gradient -->
<div class="icon-circle icon-circle-coral">
  <svg><!-- icon --></svg>
</div>
```

## 🏷️ Badges

```html
<!-- Light Blue Badge -->
<span class="badge">New</span>

<!-- Coral Badge -->
<span class="badge badge-coral">Featured</span>
```

## 🌊 Cloud Dividers

```html
<div class="wave-divider">
  <!-- SVG wave pattern -->
</div>
```

Location: `template-parts/components/cloud-divider.svg`

## 🎬 Animations

### Lift Effect
```css
transform: translateY(-3px);
transition: all 0.3s ease-out;
```
Applied to: Buttons, Cards, Icons (on hover)

### Wave Animation
```css
animation: wave 8s ease-in-out infinite;
```
Applied to: Cloud dividers

### Float Animation
```html
<div class="float">Element</div>
```

### Glow Animation
```html
<div class="glow">Element</div>
```

## 💡 Shadows

```html
<div class="shadow-soft">Light shadow</div>
<div class="shadow-card">Card elevation</div>
<div class="shadow-cloud">Cloud shadow</div>
```

## 🎨 Text Color Utilities

```html
<p class="text-captain-blue">Primary text</p>
<p class="text-sky-blue">Secondary text</p>
<p class="text-warm-coral">Accent text</p>
<p class="text-sunlight">Highlight text</p>
```

## 🌫️ Background Utilities

```html
<div class="bg-captain-blue">...</div>
<div class="bg-sky-blue">...</div>
<div class="bg-cloud-light">...</div>
<div class="bg-cloud-grey">...</div>
```

## 📐 Sizing

- **Pill Buttons**: `border-radius: 9999px`
- **Cards**: `border-radius: 24px`
- **Form Inputs**: `border-radius: 12px`
- **Badges**: `border-radius: 20px`
- **Icon Circles**: `border-radius: 50%`

## 🔗 Navigation Links

```html
<a href="#" class="nav-link">Home</a>
```

**Hover**: Color changes to Sky Blue + animated underline

## 📱 Responsive

- Mobile-first design
- Tailwind responsive prefixes supported
- Touch-friendly button sizes
- Optimized animations for mobile

## ⚡ Performance Tips

1. Google Fonts are preconnected for fast loading
2. CSS variables reduce file size
3. Animations respect `prefers-reduced-motion`
4. Shadow system is GPU-accelerated

## 🔍 Browser Support

- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Mobile browsers

## 📚 Files

| File | Purpose |
|------|---------|
| `aviation-design.css` | Main design system |
| `enhancements.css` | Hover/animation effects |
| `style.css` | Global styles |
| `header.php` | Fonts & imports |
| `AVIATION_DESIGN_GUIDE.md` | Full documentation |
| `IMPLEMENTATION_SUMMARY.md` | Implementation details |

## 🚀 Common Patterns

### Hero Section
```html
<section class="bg-white py-20">
  <div class="container-custom">
    <h1 class="text-captain-blue">Heading</h1>
    <p class="text-text-medium">Description</p>
    <a href="#" class="btn btn-primary">CTA</a>
  </div>
</section>
```

### Card Grid
```html
<div class="grid md:grid-cols-3 gap-8">
  <div class="card card-lg">...</div>
  <div class="card card-lg">...</div>
  <div class="card card-lg">...</div>
</div>
```

### Icon + Title
```html
<div class="text-center">
  <div class="icon-circle mx-auto mb-4">
    <svg>...</svg>
  </div>
  <h3 class="text-captain-blue">Title</h3>
  <p class="text-text-medium">Description</p>
</div>
```

---

**Design System Version**: 1.0.0  
**Last Updated**: 2024  
**Status**: ✅ Production Ready
