<style>
/* game-dev sub-pages common styles */
.page-header-parent { margin-bottom: var(--space-1); }
.page-header-parent a { color: rgba(255, 255, 255, 0.8); text-decoration: none; font-size: var(--text-sm); }
.page-header-parent a:hover { color: var(--color-white); text-decoration: underline; }
.page-content-narrow { max-width: 720px; margin-left: auto; margin-right: auto; }
.gd-sub-text { font-size: var(--text-base); color: var(--color-gray-700); line-height: var(--leading-relaxed); margin-bottom: var(--space-4); }
.gd-sub-text:last-child { margin-bottom: 0; }
.gd-sub-note { font-size: var(--text-sm); color: var(--color-gray-500); margin-top: var(--space-2); }
.gd-sub-genre-list,
.gd-sub-scene-list,
.gd-sub-case-list,
.gd-sub-strength-list { list-style: disc; padding-left: var(--space-6); }
.gd-sub-genre-list li,
.gd-sub-scene-list li,
.gd-sub-case-list li,
.gd-sub-strength-list li { margin-bottom: var(--space-2); line-height: var(--leading-relaxed); }
.gd-sub-steps { padding-left: var(--space-6); }
.gd-sub-steps li { margin-bottom: var(--space-3); line-height: var(--leading-relaxed); }
.gd-sub-layer-list { padding-left: var(--space-6); }
.gd-sub-layer-list li { margin-bottom: var(--space-2); line-height: var(--leading-relaxed); color: var(--color-gray-600); }
.gd-sub-layer-highlight { color: var(--color-primary); font-weight: var(--font-semibold); }
.gd-sub-back-link-wrap { padding: var(--space-2) 0; }
.gd-sub-back-link { font-size: var(--text-sm); color: var(--color-primary); text-decoration: none; }
.gd-sub-back-link:hover { text-decoration: underline; }

/* pricing cards */
.gd-pricing-grid { display: grid; gap: var(--space-6); grid-template-columns: 1fr; margin-top: var(--space-6); }
@media (min-width: 768px) { .gd-pricing-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-pricing-card { background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-6); text-align: center; }
.gd-pricing-card--primary { border-color: var(--color-primary); box-shadow: var(--shadow-md); position: relative; }
.gd-pricing-plan { font-family: var(--font-en); font-size: var(--text-lg); font-weight: var(--font-bold); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: var(--space-2); }
.gd-pricing-card--primary .gd-pricing-plan { color: var(--color-primary); }
.gd-pricing-price { font-size: var(--text-2xl); font-weight: var(--font-bold); margin-bottom: var(--space-1); }
.gd-pricing-playtime { font-size: var(--text-sm); color: var(--color-gray-500); margin-bottom: var(--space-4); }
.gd-pricing-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); text-align: left; margin: 0; }

/* reference game cards */
.gd-ref-grid { list-style: none; padding: 0; margin: 0; display: grid; gap: var(--space-5); grid-template-columns: 1fr; }
@media (min-width: 640px) { .gd-ref-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 1024px) { .gd-ref-grid { grid-template-columns: repeat(3, 1fr); } }
.gd-ref-card { min-width: 0; }
.gd-ref-link { display: block; background: var(--color-white); border: 1px solid var(--color-gray-200); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: var(--space-5); text-decoration: none; color: inherit; transition: box-shadow var(--transition-base), border-color var(--transition-base), transform var(--transition-base); height: 100%; }
.gd-ref-link:hover { border-color: var(--color-primary); box-shadow: var(--shadow-md); transform: translateY(-2px); }
.gd-ref-title { font-size: var(--text-base); font-weight: var(--font-semibold); margin: 0 0 var(--space-1); }
.gd-ref-org { font-size: var(--text-xs); color: var(--color-gray-400); margin: 0 0 var(--space-3); }
.gd-ref-desc { font-size: var(--text-sm); color: var(--color-gray-600); line-height: var(--leading-relaxed); margin: 0; }
.gd-ref-note { font-size: var(--text-xs); color: var(--color-gray-400); margin-top: var(--space-4); }
</style>
