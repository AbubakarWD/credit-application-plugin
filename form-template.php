<div class="page-wrap">

        <form id="creditForm" onsubmit="handleSubmit(event)" novalidate>

            <!-- ── PERSONAL INFO ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Buyer</h2>
                </div>
                <div class="card-body">
                    <div class="g3">
                        <div class="field">
                            <label>First Name <span class="req">*</span></label>
                            <input type="text" placeholder="First" required>
                        </div>
                        <div class="field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Middle">
                        </div>
                        <div class="field">
                            <label>Last Name <span class="req">*</span></label>
                            <input type="text" placeholder="Last" required>
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Date of Birth <span class="req">*</span></label>
                            <input type="date" required>
                        </div>
                        <div class="field">
                            <label>Social Security # <span class="req">*</span></label>
                            <input type="text" placeholder="XXX-XX-XXXX" maxlength="11" required>
                        </div>
                        <div class="field">
                            <label>Primary Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000" required>
                        </div>
                        <div class="field">
                            <label>Cell Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Other Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Email Address <span class="req">*</span></label>
                            <input type="email" placeholder="you@email.com" required>
                        </div>

                        <div class="field">
                            <label>Street Address <span class="req">*</span></label>
                            <input type="text" placeholder="123 Main Street" required>
                        </div>
                        <div class="field">
                            <label>City <span class="req">*</span></label>
                            <input type="text" placeholder="City" required>
                        </div>
                        <div class="field">
                            <label>State <span class="req">*</span></label>
                            <input type="text" placeholder="State" required>
                        </div>
                        <div class="field">
                            <label>ZIP Code <span class="req">*</span></label>
                            <input type="text" placeholder="00000" maxlength="10" required>
                        </div>
                        <div class="field">
                            <label>Residence Status</label>
                            <select>
                                <option value="">Select…</option>
                                <option>Own / Buying</option>
                                <option>Rent</option>
                                <option>Living with Family</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Residence since<span class="req"></span></label>
                            <input type="date">
                        </div>
                        <div class="field">
                            <label>Monthly Payment ($)</label>
                            <input type="number" placeholder="0">
                        </div>
                        <div class="field">
                            <label>Mortgage Company</label>
                            <input type="text" placeholder="Mortgage Company">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Driver's License #</label>
                            <input type="text" placeholder="License number">
                        </div>
                        <div class="field">
                            <label>License State</label>
                            <input type="text" placeholder="License State">
                        </div>
                        <div class="field">
                            <label>License Expiry <span class="req"></span></label>
                            <input type="date">
                        </div>
                        <div class="field">
                            <label>Vehicle of Interest</label>
                            <input type="text" placeholder="Vehicle of Interest">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── EMPLOYMENT ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Employment Info</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Employer</label>
                            <input type="text" placeholder="Employer name">
                        </div>
                        <div class="field">
                            <label>Job Title</label>
                            <input type="text" placeholder="Job title">
                        </div>
                        <div class="field">
                            <label>Employment Start Date</label>
                            <input type="date">
                        </div>
                        <div class="field">
                            <label>Supervisor</label>
                            <input type="text" placeholder="Supervisor name">
                        </div>
                        <div class="field">
                            <label>Monthly Income</label>
                            <input type="number" placeholder="0">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address <span class="req">*</span></label>
                            <input type="text" placeholder="123 Main Street" required>
                        </div>
                        <div class="field">
                            <label>City <span class="req">*</span></label>
                            <input type="text" placeholder="City" required>
                        </div>
                        <div class="field">
                            <label>State <span class="req">*</span></label>
                            <input type="text" placeholder="State" required>
                        </div>
                        <div class="field">
                            <label>ZIP Code <span class="req">*</span></label>
                            <input type="text" placeholder="00000" maxlength="10" required>
                        </div>
                        <div class="field">
                            <label>Primary Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000" required>
                        </div>
                        <div class="field">
                            <label>Other Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Previous address ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Previous Address</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address <span class="req">*</span></label>
                            <input type="text" placeholder="123 Main Street" required>
                        </div>
                        <div class="field">
                            <label>City <span class="req">*</span></label>
                            <input type="text" placeholder="City" required>
                        </div>
                        <div class="field">
                            <label>State <span class="req">*</span></label>
                            <input type="text" placeholder="State" required>
                        </div>
                        <div class="field">
                            <label>ZIP Code <span class="req">*</span></label>
                            <input type="text" placeholder="00000" maxlength="10" required>
                        </div>
                        <div class="field">
                            <label>Residence Status</label>
                            <select>
                                <option value="">Select…</option>
                                <option>Own / Buying</option>
                                <option>Rent</option>
                                <option>Living with Family</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Time at Residence</label>
                            <input type="text" placeholder="e.g. 2 years 3 months">
                        </div>
                        <div class="field">
                            <label>Mortgage Company</label>
                            <input type="text" placeholder="Mortgage Company">
                        </div>
                        <div class="field">
                            <label>Mortgage Phone</label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Monthly Payment</label>
                            <input type="number" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Previous Employment ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Previous Employment Info</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Employer</label>
                            <input type="text" placeholder="Employer name">
                        </div>
                        <div class="field">
                            <label>Job Title</label>
                            <input type="text" placeholder="Job title">
                        </div>
                        <div class="field">
                            <label>Supervisor</label>
                            <input type="text" placeholder="Supervisor name">
                        </div>
                        <div class="field">
                            <label>Employment From</label>
                            <input type="date">
                        </div>
                        <div class="field">
                            <label>Employment To</label>
                            <input type="date">
                        </div>

                        <div class="field">
                            <label>Monthly Income</label>
                            <input type="number" placeholder="0">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address</label>
                            <input type="text" placeholder="123 Main Street">
                        </div>
                        <div class="field">
                            <label>City </label>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="field">
                            <label>State </label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="field">
                            <label>ZIP Code </label>
                            <input type="text" placeholder="00000" maxlength="10">
                        </div>
                        <div class="field">
                            <label>Primary Phone </label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Other Phone</label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Reference ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Reference</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>First Name</label>
                            <input type="text" placeholder="First name">
                        </div>
                        <div class="field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last name">
                        </div>
                        <div class="field">
                            <label>Relationship</label>
                            <input type="text" placeholder="Relationship">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address</label>
                            <input type="text" placeholder="123 Main Street">
                        </div>
                        <div class="field">
                            <label>City </label>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="field">
                            <label>State </label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="field">
                            <label>ZIP Code </label>
                            <input type="text" placeholder="00000" maxlength="10">
                        </div>
                        <div class="field">
                            <label>Primary Phone </label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Bank Reference ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Bank Reference</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Bank Name</label>
                            <input type="text" placeholder="Bank name">
                        </div>
                        <div class="field">
                            <label>Account Type</label>
                            <input type="text" placeholder="Account type">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>City </label>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="field">
                            <label>State </label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="field">
                            <label>Primary Phone </label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Co-Buyer INFO ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Co-Buyer</h2>
                </div>
                <div class="card-body">
                    <div class="g3">
                        <div class="field">
                            <label>First Name <span class="req">*</span></label>
                            <input type="text" placeholder="First" required>
                        </div>
                        <div class="field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Middle">
                        </div>
                        <div class="field">
                            <label>Last Name <span class="req">*</span></label>
                            <input type="text" placeholder="Last" required>
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Date of Birth <span class="req">*</span></label>
                            <input type="date" required>
                        </div>
                        <div class="field">
                            <label>Social Security # <span class="req">*</span></label>
                            <input type="text" placeholder="XXX-XX-XXXX" maxlength="11" required>
                        </div>
                        <div class="field">
                            <label>Primary Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000" required>
                        </div>
                        <div class="field">
                            <label>Cell Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Other Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Email Address <span class="req">*</span></label>
                            <input type="email" placeholder="you@email.com" required>
                        </div>

                        <div class="field">
                            <label>Street Address</label>
                            <input type="text" placeholder="123 Main Street">
                        </div>
                        <div class="field">
                            <label>City</label>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="field">
                            <label>State</label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="field">
                            <label>ZIP Code</label>
                            <input type="text" placeholder="00000" maxlength="10">
                        </div>
                        <div class="field">
                            <label>Residence Status</label>
                            <select>
                                <option value="">Select…</option>
                                <option>Own / Buying</option>
                                <option>Rent</option>
                                <option>Living with Family</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Residence since<span class="req"></span></label>
                            <input type="date">
                        </div>
                        <div class="field">
                            <label>Monthly Payment ($)</label>
                            <input type="number" placeholder="0">
                        </div>
                        <div class="field">
                            <label>Mortgage Company</label>
                            <input type="text" placeholder="Mortgage Company">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>License Number</label>
                            <input type="text" placeholder="License number">
                        </div>
                        <div class="field">
                            <label>License State</label>
                            <input type="text" placeholder="License State">
                        </div>
                        <div class="field">
                            <label>License Expiry <span class="req"></span></label>
                            <input type="date">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Co-buyer EMPLOYMENT ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Co-Buyer Employment Info</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Employer</label>
                            <input type="text" placeholder="Employer name">
                        </div>
                        <div class="field">
                            <label>Job Title</label>
                            <input type="text" placeholder="Job title">
                        </div>
                        <div class="field">
                            <label>Employment Start Date</label>
                            <input type="date">
                        </div>
                        <div class="field">
                            <label>Supervisor</label>
                            <input type="text" placeholder="Supervisor name">
                        </div>
                        <div class="field">
                            <label>Monthly Income</label>
                            <input type="number" placeholder="0">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address <span class="req">*</span></label>
                            <input type="text" placeholder="123 Main Street" required>
                        </div>
                        <div class="field">
                            <label>City <span class="req">*</span></label>
                            <input type="text" placeholder="City" required>
                        </div>
                        <div class="field">
                            <label>State <span class="req">*</span></label>
                            <input type="text" placeholder="State" required>
                        </div>
                        <div class="field">
                            <label>ZIP Code <span class="req">*</span></label>
                            <input type="text" placeholder="00000" maxlength="10" required>
                        </div>
                        <div class="field">
                            <label>Primary Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000" required>
                        </div>
                        <div class="field">
                            <label>Other Phone <span class="req">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Co-Buyer Previous Address ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Co-Buyer Previous Address</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address <span class="req">*</span></label>
                            <input type="text" placeholder="123 Main Street" required>
                        </div>
                        <div class="field">
                            <label>City <span class="req">*</span></label>
                            <input type="text" placeholder="City" required>
                        </div>
                        <div class="field">
                            <label>State <span class="req">*</span></label>
                            <input type="text" placeholder="State" required>
                        </div>
                        <div class="field">
                            <label>ZIP Code <span class="req">*</span></label>
                            <input type="text" placeholder="00000" maxlength="10" required>
                        </div>
                        <div class="field">
                            <label>Residence Status</label>
                            <select>
                                <option value="">Select…</option>
                                <option>Own / Buying</option>
                                <option>Rent</option>
                                <option>Living with Family</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Time at Residence</label>
                            <input type="text" placeholder="e.g. 2 years 3 months">
                        </div>
                        <div class="field">
                            <label>Mortgage Company</label>
                            <input type="text" placeholder="Mortgage Company">
                        </div>
                        <div class="field">
                            <label>Mortgage Phone</label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Monthly Payment</label>
                            <input type="number" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Co-Buyer Previous Employment ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Co-Buyer Previous Employment Info</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Employer</label>
                            <input type="text" placeholder="Employer name">
                        </div>
                        <div class="field">
                            <label>Job Title</label>
                            <input type="text" placeholder="Job title">
                        </div>
                        <div class="field">
                            <label>Supervisor</label>
                            <input type="text" placeholder="Supervisor name">
                        </div>
                        <div class="field">
                            <label>Employment From</label>
                            <input type="date">
                        </div>
                        <div class="field">
                            <label>Employment To</label>
                            <input type="date">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address</label>
                            <input type="text" placeholder="123 Main Street">
                        </div>
                        <div class="field">
                            <label>City </label>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="field">
                            <label>State </label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="field">
                            <label>ZIP Code </label>
                            <input type="text" placeholder="00000" maxlength="10">
                        </div>
                        <div class="field">
                            <label>Primary Phone </label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                        <div class="field">
                            <label>Other Phone</label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Co-Buyer Reference ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Co-Buyer Reference</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>First Name</label>
                            <input type="text" placeholder="First name">
                        </div>
                        <div class="field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last name">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>Street Address</label>
                            <input type="text" placeholder="123 Main Street">
                        </div>
                        <div class="field">
                            <label>City </label>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="field">
                            <label>State </label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="field">
                            <label>ZIP Code </label>
                            <input type="text" placeholder="00000" maxlength="10">
                        </div>
                        <div class="field">
                            <label>Primary Phone </label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Co-Buyer Bank Reference ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Co-Buyer Bank Reference</h2>
                </div>
                <div class="card-body">
                    <div class="g3 mt">
                        <div class="field">
                            <label>Bank Name</label>
                            <input type="text" placeholder="Bank name">
                        </div>
                        <div class="field">
                            <label>Account Type</label>
                            <input type="text" placeholder="Account type">
                        </div>
                    </div>
                    <div class="g3 mt">
                        <div class="field">
                            <label>City </label>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="field">
                            <label>State </label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="field">
                            <label>Primary Phone </label>
                            <input type="tel" placeholder="(000) 000-0000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── VEHICLE OF INTEREST ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2>Vehicle of Interest</h2>
                </div>
                <div class="card-body">
                    <div class="g4">
                        <div class="field">
                            <label>Year</label>
                            <input type="number" placeholder="" min="1990" max="2026">
                        </div>
                        <div class="field">
                            <label>Make</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="field">
                            <label>Model</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="field">
                            <label>Trim</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="field">
                            <label>Current Milliage</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="field">
                            <label>Amount Owed</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="field">
                            <label>Ext Color</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="field">
                            <label>Int Color</label>
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── acknowledgments ── -->
            <div class="form-card">
                <div class="card-header">
                    <h2></h2>
                </div>
                <div class="card-body">
                    <p class="consent-box">ACKNOWLEDGMENT AND CONSENT: I certify that the above information is complete
                        and accurate to the
                        best of my knowledge. Creditors receiving this application will retain the application whether
                        or not it is approved. Creditors may rely on this application in deciding whether to grant the
                        requested credit. False statements may subject me to criminal penalties. I authorize the
                        creditors to obtain credit reports about me on an ongoing basis during this credit transaction
                        and to check my credit and employment history on an ongoing basis during the term of the credit
                        transaction. If this application is approved, I authorize the creditor to give credit
                        information about me to its affiliates.
                    </p>
                    <ul>
                        <li>I agree to allow the creditor to submit the application to other affiliates or third-party
                            financial partners in an effort to obtain credit. All acknowledgements and authorizations
                            extend to those partners and affiliates as well.
                        </li>
                        <li>I agree to allow the creditor or its’ authorized partners to contact me at the email address
                            above or on any of the phone numbers provided. Such contact may include voice calls, text
                            messages, pre-recorded or artificial voice messages, and the calls may be made naturally or
                            through the use of automatic or computer-aided dialing systems. All such calls may be
                            monitored or recorded for quality or training purposes.
                        </li>
                        <li>I agree to electronically sign this application for Credit by allowing you to record my IP
                            address, as well as the time and date.
                        </li>
                        <li>Federal Law requires that financial companies obtain sufficient information, including your
                            Taxpayer Identification Number, or Social Security Number, to positively verify the identity
                            of the person(s) applying for credit. You may be asked to provide acceptable identification
                            documents, and provide supplemental forms of identification or other supporting
                            documentation to verify certain information.
                        </li>
                    </ul>
                    <div class="mt">
                        <label class="radio-opt" style="font-size:13px; gap:8px;">
                            <input type="checkbox" required style="width:auto; accent-color:var(--red);">
                            I agree to the Terms and Conditions and understand our Privacy Policy.
                        </label>
                    </div>
                </div>
            </div>

            <!-- ── SUBMIT ── -->
            <div class="submit-area">
                <button type="submit" class="btn-submit">Submit Application</button>
            </div>

        </form>
    </div>