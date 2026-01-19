# Aviation ABA Design System Implementation Guide

## Color Palette

### Primary Colors
- **Captain's Blue**: `#1A365D` - Primary color for text, headings, icons
- **Sky Blue**: `#87CEEB` - Secondary interactive color, focus states
- **Cloud Light**: `#E0F7FA` - Light backgrounds, hover states

### Accent Colors
- **Warm Coral**: `#FF6B6B` - Primary CTA buttons, highlights
- **Sunlight**: `#F4A261` - Secondary highlights, accents
- **Cloud Grey**: `#F7F9FC` - Alternate section backgrounds

### Neutral Colors
- **White**: `#FFFFFF` - Primary background
- **Text Dark**: `#1A365D` - Body text (same as Captain's Blue)
- **Text Medium**: `#546E7A` - Secondary text
- **Text Light**: `#90A4AE` - Tertiary text

## CSS Variables

All colors are available as CSS custom properties in `aviation-design.css`:

```css
:root {
  --captain-blue: #1A365D;
  --sky-blue: #87CEEB;
  --cloud-light: #E0F7FA;
  --cloud-grey: #F7F9FC;
  --warm-coral: #FF6B6B;
  --sunlight: #F4A261;
}
```

Use in CSS: `color: var(--captain-blue);`
Use in Tailwind: Configured in `tailwind.config.js`

## Typography System

### Font Families
- **Headings** (h1-h6): Montserrat, Poppins (bold, 700 weight)
- **Body Text**: Open Sans, Lato (regular, 400 weight)
- **Imported via**: Google Fonts (see header.php)

### Tailwind Classes
```html
<!-- Headings -->
<h1 class="font-montserrat font-bold text-captain-blue">Heading</h1>

<!-- Body Text -->
<p class="font-open-sans text-text-dark">Paragraph text</p>
```

## Component Styles

### Buttons

#### Primary (CTA - Warm Coral)
```html
<a href="#" class="btn btn-primary">Contact Us</a>
```
- Background: Warm Coral (#FF6B6B)
- Hover: Lift effect (transform: translateY(-3px))
- Shape: Pill (border-radius: 9999px)
- Shadow: Elevation on hover

#### Secondary (Sky Blue)
```html
<a href="#" class="btn btn-secondary">Learn More</a>
```
- Background: Sky Blue (#87CEEB)
- Text: Captain's Blue
- Hover: Darker sky blue with lift

#### Outline
```html
<a href="#" class="btn btn-outline">View Details</a>
```
- Border: Captain's Blue
- Transparent background
- Hover: Light blue background

### Cards

#### Standard Card
```html
<div class="card">
  <h3>Card Title</h3>
  <p>Card content goes here.</p>
</div>
```
- Border radius: 24px
- Background: White
- Shadow: Elevation system (var(--shadow-card))
- Hover: Lift effect + enhanced shadow

#### Card with Rounded Border
```html
<div class="card card-sm">
  Small card content
</div>
```
- Border radius: 16px

#### Large Card
```html
<div class="card card-lg">
  Large card content with more padding
</div>
```
- Padding: 2.5rem
- Border radius: 24px

### Forms

#### Text Input
```html
<label class="form-label">Your Email</label>
<input type="email" class="form-input" placeholder="you@example.com">
```
- Border: Light captain-blue
- Focus: Sky Blue border + light blue background
- Rounded: 12px

#### Textarea
```html
<textarea class="form-input" placeholder="Your message..."></textarea>
```
- Same styling as text input

### Navigation Links

#### Hover Underline Effect
```html
<a href="#" class="nav-link">Home</a>
```
- Animated underline on hover
- Color changes to Sky Blue
- Smooth 0.3s transition

### Badges

#### Light Badge
```html
<span class="badge">New</span>
```
- Background: Cloud Light
- Text: Captain's Blue
- Rounded: 20px

#### Coral Badge
```html
<span class="badge badge-coral">Featured</span>
```
- Background: Warm Coral (10% opacity)
- Text: Warm Coral

### Icon Circles

#### Standard Icon Circle
```html
<div class="icon-circle">
  <svg><!-- icon SVG --></svg>
</div>
```
- Size: 64px
- Gradient: Sky Blue → Cloud Light
- Border radius: 50%
- Shadow: Card elevation
- Hover: Lift effect

#### Coral Icon Circle
```html
<div class="icon-circle icon-circle-coral">
  <svg><!-- icon SVG --></svg>
</div>
```
- Gradient: Warm Coral → Red
- Icon color: White

## Cloud Dividers

### Implementation
Cloud dividers are SVG wave patterns used to separate sections with a playful "sky" aesthetic.

```html
<!-- Between sections -->
<div class="wave-divider">
  <!-- SVG content or component -->
</div>
```

### Location
Cloud divider SVG: `template-parts/components/cloud-divider.svg`

### Styling
- Animated wave effect
- Soft gradient overlay
- Responsive height
- Preserved aspect ratio

## Shadow System

### CSS Variables
```css
--shadow-soft: 0 4px 20px -4px rgba(26, 54, 93, 0.08);
--shadow-card: 0 10px 30px -10px rgba(26, 54, 93, 0.15);
--shadow-card-hover: 0 20px 50px -15px rgba(26, 54, 93, 0.2);
--shadow-cloud: 0 15px 40px -10px rgba(26, 54, 93, 0.1);
```

### Utility Classes
```html
<div class="shadow-soft">Soft shadow</div>
<div class="shadow-card">Card shadow</div>
<div class="shadow-cloud">Cloud shadow</div>
```

## Animations

### Lift Effect (Button Hover)
```css
transform: translateY(-3px);
transition: all 0.3s ease-out;
```
- Applied to: Buttons, Cards, Icons
- Duration: 300ms
- Distance: 3px upward

### Wave Animation (Dividers)
```css
animation: wave 8s ease-in-out infinite;
```
- Duration: 8 seconds
- Subtle horizontal movement

### Float Animation
```html
<div class="float">Floating element</div>
```
- Gentle up-down motion
- 3-second loop

### Glow Animation
```html
<div class="glow">Glowing element</div>
```
- Shadow pulsing effect
- 2-second loop

## Tailwind Configuration

### Color Extensions
```javascript
// In tailwind.config.js
colors: {
  'captain-blue': '#1A365D',
  'sky-blue': '#87CEEB',
  'cloud-light': '#E0F7FA',
  'cloud-grey': '#F7F9FC',
  'warm-coral': '#FF6B6B',
  'sunlight': '#F4A261',
}
```

### Font Families
```javascript
fontFamily: {
  'montserrat': ['Montserrat', 'sans-serif'],
  'poppins': ['Poppins', 'sans-serif'],
  'open-sans': ['Open Sans', 'sans-serif'],
  'lato': ['Lato', 'sans-serif'],
}
```

### Box Shadows
```javascript
boxShadow: {
  'card': '0 10px 30px -10px rgba(26, 54, 93, 0.15)',
  'card-hover': '0 20px 50px -15px rgba(26, 54, 93, 0.2)',
  'cloud': '0 15px 40px -10px rgba(26, 54, 93, 0.1)',
}
```

## Implementation Checklist

- [x] Created `aviation-design.css` with complete design system
- [x] Updated `style.css` with new typography and colors
- [x] Updated `enhancements.css` with new button/card styles
- [x] Updated `tailwind.config.js` with new colors and tokens
- [x] Added Google Fonts imports to `header.php`
- [x] Created cloud divider SVG component
- [ ] Update `front-page.php` to use new button/card classes
- [ ] Test responsive behavior on mobile
- [ ] Verify accessibility (color contrast, focus states)
- [ ] Optimize Google Fonts loading
- [ ] Test animation performance

## Browser Support

- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Mobile browsers (iOS Safari 14+, Chrome Android)

All CSS uses modern standards (CSS Variables, CSS Grid, Flexbox).

## Next Steps

1. **Update front-page.php**: Replace old color/button references with new classes
2. **Test responsive**: Verify mobile layout and touch interactions
3. **Performance**: Check Google Fonts loading impact
4. **Accessibility**: Verify WCAG 2.1 AA compliance
5. **Optimization**: Minify CSS, optimize SVG files
