<style>
    /* ============================================================
       1. MODERN FORM FIELDS (Frosted & Animated)
    ============================================================ */
    .form-control, 
    .select2-container--default .select2-selection--single {
        background: rgba(255, 255, 255, 0.1) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        border-radius: 8px !important;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        color: inherit; /* Keeps your existing text color */
    }

    /* Focus Animation: Slight lift and glow */
    .form-control:focus, 
    .select2-container--default.select2-container--focus .select2-selection--single {
        background: rgba(255, 255, 255, 0.15) !important;
        border-color: #38bdf8 !important;
        box-shadow: 0 4px 12px rgba(56, 189, 248, 0.2) !important;
        transform: translateY(-1px);
        outline: none !important;
    }

    /* ============================================================
       2. BUTTON ANIMATIONS (Interaction Effects)
    ============================================================ */
    .btn {
        border-radius: 8px !important;
        border: none !important;
        transition: all 0.3s ease !important;
        position: relative;
        overflow: hidden;
    }

    /* Hover: Lift and Brighten */
    .btn:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3) !important;
        filter: brightness(1.1);
    }

    /* Active: Push down effect */
    .btn:active {
        transform: translateY(0px) !important;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) !important;
    }

    /* ============================================================
       3. GLYPHICON ANIMATIONS (From your source)
    ============================================================ */
    .gly-spin {
        animation: spin 2s infinite linear;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(359deg); }
    }

    .gly-rotate-90  { transform: rotate(90deg); }
    .gly-rotate-180 { transform: rotate(180deg); }
    .gly-rotate-270 { transform: rotate(270deg); }

    .gly-flip-horizontal { transform: scale(-1, 1); }
    .gly-flip-vertical   { transform: scale(1, -1); }

</style>
