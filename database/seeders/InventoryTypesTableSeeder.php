<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventoryTypes = [
            ['Fasteners', 'Nails', 'Various types including common nails, finishing nails, roofing nails, etc.'],
            ['Fasteners', 'Screws', 'Wood screws, machine screws, drywall screws, self-tapping screws, etc.'],
            ['Fasteners', 'Bolts and Nuts', 'Hex bolts, carriage bolts, lag bolts, anchor bolts, etc.'],
            ['Fasteners', 'Washers', 'Flat washers, lock washers, fender washers, etc.'],
            ['Fasteners', 'Anchors', 'Wall anchors, expansion anchors, toggle bolts, etc.'],
            ['Structural Hardware', 'Brackets', 'Angle brackets, joist hangers, rafter ties, etc.'],
            ['Structural Hardware', 'Plates', 'Nail plates, mending plates, tie plates, etc.'],
            ['Structural Hardware', 'Connectors', 'Beam connectors, post bases, post caps, etc.'],
            ['Locks and Security Hardware', 'Locks', 'Padlocks, deadbolts, door locks, combination locks, etc.'],
            ['Locks and Security Hardware', 'Hinges', 'Door hinges, gate hinges, continuous hinges, etc.'],
            ['Locks and Security Hardware', 'Latches and Catches', 'Barrel bolts, slide bolts, hasp and staples, etc.'],
            ['Tools and Equipment', 'Hand Tools', 'Hammers, screwdrivers, pliers, wrenches, saws, levels, etc.'],
            ['Tools and Equipment', 'Power Tools', 'Drills, saws, grinders, sanders, nail guns, etc.'],
            ['Tools and Equipment', 'Measuring Tools', 'Tape measures, laser levels, calipers, squares, etc.'],
            ['Building Materials', 'Metal Sheets and Bars', 'Steel, aluminum, copper sheets, and bars.'],
            ['Building Materials', 'Pipes and Tubing', 'PVC pipes, metal pipes, conduit, etc.'],
            ['Building Materials', 'Wire and Cables', 'Electrical wires, steel cables, chains, etc.'],
            ['Plumbing Hardware', 'Fittings', 'Elbows, tees, couplings, adapters, etc.'],
            ['Plumbing Hardware', 'Valves', 'Ball valves, gate valves, check valves, etc.'],
            ['Plumbing Hardware', 'Fixtures', 'Faucets, showerheads, hose bibs, etc.'],
            ['Electrical Hardware', 'Switches and Outlets', 'Light switches, electrical outlets, dimmers, etc.'],
            ['Electrical Hardware', 'Boxes and Panels', 'Junction boxes, breaker panels, outlet boxes, etc.'],
            ['Electrical Hardware', 'Conduits and Fittings', 'Electrical conduits, conduit fittings, etc.'],
            ['Adhesives and Sealants', 'Glues', 'Wood glue, epoxy, super glue, etc.'],
            ['Adhesives and Sealants', 'Sealants', 'Silicone sealant, caulk, waterproofing sealants, etc.'],
            ['Adhesives and Sealants', 'Tapes', 'Duct tape, electrical tape, masking tape, etc.'],
            ['Miscellaneous Hardware', 'Chains and Ropes', 'Various types for lifting, securing, and tying.'],
            ['Miscellaneous Hardware', 'Wheels and Casters', 'For movable furniture and equipment.'],
            ['Miscellaneous Hardware', 'Handles and Knobs', 'Door handles, drawer pulls, cabinet knobs, etc.'],
            ['Paints', 'Interior Paints', 'Wall paint, ceiling paint, trim paint, etc.'],
            ['Paints', 'Exterior Paints', 'House paint, fence paint, deck paint, etc.'],
            ['Paints', 'Specialty Paints', 'Chalkboard paint, anti-mold paint, heat-resistant paint, etc.'],
            ['Stains and Finishes', 'Wood Stains', 'Oil-based, water-based, gel stains, etc.'],
            ['Stains and Finishes', 'Clear Finishes', 'Varnishes, lacquers, shellacs, polyurethane, etc.'],
            ['Stains and Finishes', 'Sealants', 'Concrete sealers, stone sealers, wood sealers, etc.'],
            ['Primers and Undercoats', 'Primers', 'All-purpose primer, stain-blocking primer, metal primer, drywall primer, etc.'],
            ['Primers and Undercoats', 'Undercoats', 'Specific types designed to prepare surfaces for the final coat.'],
            ['Paint Tools and Accessories', 'Brushes', 'Various sizes and types for different applications.'],
            ['Paint Tools and Accessories', 'Rollers', 'Roller frames, covers, extension poles, etc.'],
            ['Paint Tools and Accessories', 'Sprayers', 'Handheld paint sprayers, airless sprayers, HVLP sprayers, etc.'],
            ['Paint Tools and Accessories', 'Trays and Liners', 'Paint trays, liners, and grids.'],
            ['Preparation and Finishing Supplies', 'Sandpaper', 'Various grits for surface preparation.'],
            ['Preparation and Finishing Supplies', 'Tape', 'Painter\'s tape for clean edges and masking.'],
            ['Preparation and Finishing Supplies', 'Drop Cloths', 'Plastic and canvas drop cloths to protect surfaces.'],
            ['Preparation and Finishing Supplies', 'Cleaning Supplies', 'Paint thinner, mineral spirits, brush cleaners, etc.'],
            ['Protective Gear', 'Masks and Respirators', 'For protection against fumes and dust.'],
            ['Protective Gear', 'Gloves', 'Disposable and reusable gloves for handling paints and chemicals.'],
            ['Protective Gear', 'Goggles', 'Eye protection while painting and sanding.'],
            ['Miscellaneous', 'Caulks and Fillers', 'Caulk, wood filler, spackling paste, etc.'],
            ['Miscellaneous', 'Tinting and Mixing Supplies', 'Colorants, paint mixers, stir sticks, etc.'],
        ];

        foreach ($inventoryTypes as $type) {
            DB::table('inventory_types')->insert([
                'type_category' => $type[0],
                'type_name' => $type[1],
                'type_description' => $type[2],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
