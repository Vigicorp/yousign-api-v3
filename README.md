# OpenAPIClient-php

Build the best experience of digital signature through your own platform. Increase your conversion rates, leverage your data and reduce your costs with Yousign API.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ApproverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$approver_id = 'approver_id_example'; // string | Approver Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdApproversApproverId($signature_request_id, $approver_id);
} catch (Exception $e) {
    echo 'Exception when calling ApproverApi->deleteSignatureRequestsSignatureRequestIdApproversApproverId: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApproverApi* | [**deleteSignatureRequestsSignatureRequestIdApproversApproverId**](docs/Api/ApproverApi.md#deletesignaturerequestssignaturerequestidapproversapproverid) | **DELETE** /signature_requests/{signatureRequestId}/approvers/{approverId} | Delete an Approver
*ApproverApi* | [**getSignatureRequestsSignatureRequestIdApproversApproverId**](docs/Api/ApproverApi.md#getsignaturerequestssignaturerequestidapproversapproverid) | **GET** /signature_requests/{signatureRequestId}/approvers/{approverId} | Get an Approver
*ApproverApi* | [**patchSignatureRequestsSignatureRequestIdApproversApproverId**](docs/Api/ApproverApi.md#patchsignaturerequestssignaturerequestidapproversapproverid) | **PATCH** /signature_requests/{signatureRequestId}/approvers/{approverId} | Update an Approver
*ApproverApi* | [**postSignatureRequestsSignatureRequestIdApprovers**](docs/Api/ApproverApi.md#postsignaturerequestssignaturerequestidapprovers) | **POST** /signature_requests/{signatureRequestId}/approvers | Create a new Approver
*ApproverApi* | [**postSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder**](docs/Api/ApproverApi.md#postsignaturerequestssignaturerequestidapproversapproveridsendreminder) | **POST** /signature_requests/{signatureRequestId}/approvers/{approverId}/send_reminder | Send manual reminder to an Approver
*ArchiveApi* | [**getArchivesArchivedFileIdDownload**](docs/Api/ArchiveApi.md#getarchivesarchivedfileiddownload) | **GET** /archives/{archivedFileId}/download | Download archived file
*ArchiveApi* | [**postArchives**](docs/Api/ArchiveApi.md#postarchives) | **POST** /archives | Direct upload an archived file
*AuditTrailApi* | [**getSignatureRequestsSignatureRequestIdAuditTrailsDownload**](docs/Api/AuditTrailApi.md#getsignaturerequestssignaturerequestidaudittrailsdownload) | **GET** /signature_requests/{signatureRequestId}/audit_trails/download | Download Signature Request Audit Trails
*AuditTrailApi* | [**getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails**](docs/Api/AuditTrailApi.md#getsignaturerequestssignaturerequestidsignerssigneridaudittrails) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/audit_trails | Get Signer Audit Trail
*AuditTrailApi* | [**getSignersSignerIdAuditTrailsDownload**](docs/Api/AuditTrailApi.md#getsignerssigneridaudittrailsdownload) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/audit_trails/download | Download Audit Trail PDF
*ConsumptionApi* | [**getConsumptions**](docs/Api/ConsumptionApi.md#getconsumptions) | **GET** /consumptions | Get Consumptions
*ConsumptionApi* | [**getConsumptionsExport**](docs/Api/ConsumptionApi.md#getconsumptionsexport) | **GET** /consumptions/export | Export Consumption data
*ContactApi* | [**deleteContactsContactId**](docs/Api/ContactApi.md#deletecontactscontactid) | **DELETE** /contacts/{contactId} | Delete a Contact
*ContactApi* | [**getContacts**](docs/Api/ContactApi.md#getcontacts) | **GET** /contacts | List Contacts
*ContactApi* | [**getContactsContactId**](docs/Api/ContactApi.md#getcontactscontactid) | **GET** /contacts/{contactId} | Get a Contact
*ContactApi* | [**patchContactsContactId**](docs/Api/ContactApi.md#patchcontactscontactid) | **PATCH** /contacts/{contactId} | Update a Contact
*ContactApi* | [**postContact**](docs/Api/ContactApi.md#postcontact) | **POST** /contacts | Create a Contact
*CustomExperienceApi* | [**deleteCustomExperience**](docs/Api/CustomExperienceApi.md#deletecustomexperience) | **DELETE** /custom_experiences/{customExperienceId} | Delete a Custom Experience
*CustomExperienceApi* | [**deleteCustomExperienceLogo**](docs/Api/CustomExperienceApi.md#deletecustomexperiencelogo) | **DELETE** /custom_experiences/{customExperienceId}/logo | Delete a Custom Experience logo
*CustomExperienceApi* | [**getCustomExperiences**](docs/Api/CustomExperienceApi.md#getcustomexperiences) | **GET** /custom_experiences | List Custom Experiences
*CustomExperienceApi* | [**getCustomExperiencesCustomExperienceId**](docs/Api/CustomExperienceApi.md#getcustomexperiencescustomexperienceid) | **GET** /custom_experiences/{customExperienceId} | Get a Custom Experience
*CustomExperienceApi* | [**patchCustomExperienceLogo**](docs/Api/CustomExperienceApi.md#patchcustomexperiencelogo) | **POST** /custom_experiences/{customExperienceId}/logo | Update a Custom Experience logo
*CustomExperienceApi* | [**patchCustomExperiencesCustomExperienceId**](docs/Api/CustomExperienceApi.md#patchcustomexperiencescustomexperienceid) | **PATCH** /custom_experiences/{customExperienceId} | Update a Custom Experience
*CustomExperienceApi* | [**postCustomExperience**](docs/Api/CustomExperienceApi.md#postcustomexperience) | **POST** /custom_experiences | Create a Custom Experience
*DocumentApi* | [**deleteSignatureRequestsSignatureRequestIdDocumentsDocumentId**](docs/Api/DocumentApi.md#deletesignaturerequestssignaturerequestiddocumentsdocumentid) | **DELETE** /signature_requests/{signatureRequestId}/documents/{documentId} | Delete a Document
*DocumentApi* | [**getSignatureRequestsSignatureRequestIdDocuments**](docs/Api/DocumentApi.md#getsignaturerequestssignaturerequestiddocuments) | **GET** /signature_requests/{signatureRequestId}/documents | List Signature Request&#39;s Documents
*DocumentApi* | [**getSignatureRequestsSignatureRequestIdDocumentsDocumentId**](docs/Api/DocumentApi.md#getsignaturerequestssignaturerequestiddocumentsdocumentid) | **GET** /signature_requests/{signatureRequestId}/documents/{documentId} | Get a Document
*DocumentApi* | [**getSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload**](docs/Api/DocumentApi.md#getsignaturerequestssignaturerequestiddocumentsdocumentsiddownload) | **GET** /signature_requests/{signatureRequestId}/documents/{documentId}/download | Download a single Signature Request&#39;s Document
*DocumentApi* | [**getSignatureRequestsSignatureRequestIdDocumentsDownload**](docs/Api/DocumentApi.md#getsignaturerequestssignaturerequestiddocumentsdownload) | **GET** /signature_requests/{signatureRequestId}/documents/download | Download Signature Request&#39;s Documents
*DocumentApi* | [**patchSignatureRequestsSignatureRequestIdDocumentsDocumentId**](docs/Api/DocumentApi.md#patchsignaturerequestssignaturerequestiddocumentsdocumentid) | **PATCH** /signature_requests/{signatureRequestId}/documents/{documentId} | Update a Document
*DocumentApi* | [**postDocuments**](docs/Api/DocumentApi.md#postdocuments) | **POST** /documents | [DEPRECATED] Upload a Document
*DocumentApi* | [**postSignatureRequestsSignatureRequestIdDocuments**](docs/Api/DocumentApi.md#postsignaturerequestssignaturerequestiddocuments) | **POST** /signature_requests/{signatureRequestId}/documents | Add Document to a Signature Request
*DocumentApi* | [**postSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace**](docs/Api/DocumentApi.md#postsignaturerequestssignaturerequestiddocumentsdocumentidreplace) | **POST** /signature_requests/{signatureRequestId}/documents/{documentId}/replace | Replace a Document in a Signature Request
*ElectronicSealApi* | [**deleteElectronicSealImage**](docs/Api/ElectronicSealApi.md#deleteelectronicsealimage) | **DELETE** /electronic_seal_images/{electronicSealImageId} | Delete an Electronic Seal Image
*ElectronicSealApi* | [**downloadElectronicSealAuditTrail**](docs/Api/ElectronicSealApi.md#downloadelectronicsealaudittrail) | **GET** /electronic_seals/{electronicSealId}/audit_trails/download | Download an Electronic Seal Audit Trail
*ElectronicSealApi* | [**downloadElectronicSealDocument**](docs/Api/ElectronicSealApi.md#downloadelectronicsealdocument) | **GET** /electronic_seal_documents/{electronicSealDocumentId}/download | Download an Electronic Seal Document
*ElectronicSealApi* | [**downloadElectronicSealImage**](docs/Api/ElectronicSealApi.md#downloadelectronicsealimage) | **GET** /electronic_seal_images/{electronicSealImageId}/download | Download an Electronic Seal Image
*ElectronicSealApi* | [**getElectronicSeal**](docs/Api/ElectronicSealApi.md#getelectronicseal) | **GET** /electronic_seals/{electronicSealId} | Get an Electronic Seal
*ElectronicSealApi* | [**getElectronicSealAuditTrail**](docs/Api/ElectronicSealApi.md#getelectronicsealaudittrail) | **GET** /electronic_seals/{electronicSealId}/audit_trails | Get an Electronic Seal Audit Trail
*ElectronicSealApi* | [**listElectronicSealImages**](docs/Api/ElectronicSealApi.md#listelectronicsealimages) | **GET** /electronic_seal_images | List Electronic Seal Images
*ElectronicSealApi* | [**postElectronicSeals**](docs/Api/ElectronicSealApi.md#postelectronicseals) | **POST** /electronic_seals | Create an Electronic Seal
*ElectronicSealApi* | [**uploadElectronicSealDocument**](docs/Api/ElectronicSealApi.md#uploadelectronicsealdocument) | **POST** /electronic_seal_documents | Upload an Electronic Seal Document
*ElectronicSealApi* | [**uploadElectronicSealImage**](docs/Api/ElectronicSealApi.md#uploadelectronicsealimage) | **POST** /electronic_seal_images | Upload an Electronic Seal Image
*FieldApi* | [**deleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId**](docs/Api/FieldApi.md#deletesignaturerequestssignaturerequestiddocumentsdocumentidfieldsfieldid) | **DELETE** /signature_requests/{signatureRequestId}/documents/{documentId}/fields/{fieldId} | Delete a Field
*FieldApi* | [**getSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields**](docs/Api/FieldApi.md#getsignaturerequestssignaturerequestiddocumentsdocumentidfields) | **GET** /signature_requests/{signatureRequestId}/documents/{documentId}/fields | Lists the Fields of a Signature Request Document.
*FieldApi* | [**postSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields**](docs/Api/FieldApi.md#postsignaturerequestssignaturerequestiddocumentsdocumentidfields) | **POST** /signature_requests/{signatureRequestId}/documents/{documentId}/fields | Create a new Field on a Document
*FieldApi* | [**updateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId**](docs/Api/FieldApi.md#updatesignaturerequestssignaturerequestiddocumentsdocumentidfieldsfieldid) | **PATCH** /signature_requests/{signatureRequestId}/documents/{documentId}/fields/{fieldId} | Update a Field
*FollowerApi* | [**getSignatureRequestsSignatureRequestIdFollowers**](docs/Api/FollowerApi.md#getsignaturerequestssignaturerequestidfollowers) | **GET** /signature_requests/{signatureRequestId}/followers | List the Signature Request&#39;s Followers
*FollowerApi* | [**postSignatureRequestsSignatureRequestIdFollowers**](docs/Api/FollowerApi.md#postsignaturerequestssignaturerequestidfollowers) | **POST** /signature_requests/{signatureRequestId}/followers | Create new Followers
*MetadataApi* | [**deleteSignatureRequestsSignatureRequestIdMetadata**](docs/Api/MetadataApi.md#deletesignaturerequestssignaturerequestidmetadata) | **DELETE** /signature_requests/{signatureRequestId}/metadata | Delete the Signature Request Metadata
*MetadataApi* | [**getSignatureRequestsSignatureRequestIdMetadata**](docs/Api/MetadataApi.md#getsignaturerequestssignaturerequestidmetadata) | **GET** /signature_requests/{signatureRequestId}/metadata | Get the Signature Request Metadata
*MetadataApi* | [**postSignatureRequestsSignatureRequestIdMetadata**](docs/Api/MetadataApi.md#postsignaturerequestssignaturerequestidmetadata) | **POST** /signature_requests/{signatureRequestId}/metadata | Attach Metadata to a Signature Request
*MetadataApi* | [**putSignatureRequestsSignatureRequestIdMetadata**](docs/Api/MetadataApi.md#putsignaturerequestssignaturerequestidmetadata) | **PUT** /signature_requests/{signatureRequestId}/metadata | Update Metadata of a Signature Request
*SignatureRequestApi* | [**deleteSignatureRequestsSignatureRequestId**](docs/Api/SignatureRequestApi.md#deletesignaturerequestssignaturerequestid) | **DELETE** /signature_requests/{signatureRequestId} | Delete a Signature Request
*SignatureRequestApi* | [**getSignatureRequests**](docs/Api/SignatureRequestApi.md#getsignaturerequests) | **GET** /signature_requests | List Signature Requests
*SignatureRequestApi* | [**getSignatureRequestsSignatureRequestId**](docs/Api/SignatureRequestApi.md#getsignaturerequestssignaturerequestid) | **GET** /signature_requests/{signatureRequestId} | Fetch a Signature Request
*SignatureRequestApi* | [**patchSignatureRequestsSignatureRequestId**](docs/Api/SignatureRequestApi.md#patchsignaturerequestssignaturerequestid) | **PATCH** /signature_requests/{signatureRequestId} | Update a Signature Request
*SignatureRequestApi* | [**postSignatureRequests**](docs/Api/SignatureRequestApi.md#postsignaturerequests) | **POST** /signature_requests | Initiate a new Signature Request
*SignatureRequestApi* | [**postSignatureRequestsSignatureRequestIdActivate**](docs/Api/SignatureRequestApi.md#postsignaturerequestssignaturerequestidactivate) | **POST** /signature_requests/{signatureRequestId}/activate | Activate a Signature Request
*SignatureRequestApi* | [**postSignatureRequestsSignatureRequestIdCancel**](docs/Api/SignatureRequestApi.md#postsignaturerequestssignaturerequestidcancel) | **POST** /signature_requests/{signatureRequestId}/cancel | Cancel a Signature Request
*SignatureRequestApi* | [**postSignatureRequestsSignatureRequestIdReactivate**](docs/Api/SignatureRequestApi.md#postsignaturerequestssignaturerequestidreactivate) | **POST** /signature_requests/{signatureRequestId}/reactivate | Reactivate an expired Signature Request
*SignerApi* | [**deleteSignatureRequestsSignatureRequestIdSignersSignerId**](docs/Api/SignerApi.md#deletesignaturerequestssignaturerequestidsignerssignerid) | **DELETE** /signature_requests/{signatureRequestId}/signers/{signerId} | Delete a Signer
*SignerApi* | [**getSignatureRequestsSignatureRequestIdSigners**](docs/Api/SignerApi.md#getsignaturerequestssignaturerequestidsigners) | **GET** /signature_requests/{signatureRequestId}/signers | List Signature Request&#39;s Signers
*SignerApi* | [**getSignersSignersId**](docs/Api/SignerApi.md#getsignerssignersid) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId} | Get a Signer
*SignerApi* | [**patchSignatureRequestsSignatureRequestIdSignersSignerId**](docs/Api/SignerApi.md#patchsignaturerequestssignaturerequestidsignerssignerid) | **PATCH** /signature_requests/{signatureRequestId}/signers/{signerId} | Update a Signer
*SignerApi* | [**postSignatureRequestsSignatureRequestIdSigners**](docs/Api/SignerApi.md#postsignaturerequestssignaturerequestidsigners) | **POST** /signature_requests/{signatureRequestId}/signers | Create a new Signer
*SignerApi* | [**postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp**](docs/Api/SignerApi.md#postsignaturerequestssignaturerequestidsignerssigneridsendotp) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/send_otp | Send a One-Time Password (OTP) to a Signer
*SignerApi* | [**postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder**](docs/Api/SignerApi.md#postsignaturerequestssignaturerequestidsignerssigneridsendreminder) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/send_reminder | Send manual reminder to a Signer
*SignerApi* | [**postSignatureRequestsSignatureRequestIdSignersSignerIdSign**](docs/Api/SignerApi.md#postsignaturerequestssignaturerequestidsignerssigneridsign) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/sign | Sign a Signature Request
*SignerDocumentRequestApi* | [**deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId**](docs/Api/SignerDocumentRequestApi.md#deletesignaturerequestssignaturerequestiddocumentrequestsdocumentrequestid) | **DELETE** /signature_requests/{signatureRequestId}/document_requests/{documentRequestId} | Delete a Signer Document Request
*SignerDocumentRequestApi* | [**deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId**](docs/Api/SignerDocumentRequestApi.md#deletesignaturerequestssignaturerequestiddocumentrequestsdocumentrequestidsignerssignerid) | **DELETE** /signature_requests/{signatureRequestId}/document_requests/{documentRequestId}/signers/{signerId} | Remove a Signer to a given Signer Document Request
*SignerDocumentRequestApi* | [**deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments**](docs/Api/SignerDocumentRequestApi.md#deletesignaturerequestssignaturerequestidsignerssigneriddocuments) | **DELETE** /signature_requests/{signatureRequestId}/signers/{signerId}/documents | Delete the Documents uploaded by a Signer
*SignerDocumentRequestApi* | [**getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments**](docs/Api/SignerDocumentRequestApi.md#getsignaturerequestssignaturerequestidsignerssigneriddocuments) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/documents | List the Signer Documents of a Signer
*SignerDocumentRequestApi* | [**getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId**](docs/Api/SignerDocumentRequestApi.md#getsignaturerequestssignaturerequestidsignerssigneriddocumentssignerdocumentid) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/documents/{signerDocumentId}/download | Download a Signer Document
*SignerDocumentRequestApi* | [**postSignatureRequestsSignatureRequestIdDocumentRequests**](docs/Api/SignerDocumentRequestApi.md#postsignaturerequestssignaturerequestiddocumentrequests) | **POST** /signature_requests/{signatureRequestId}/document_requests | Add Signer Document Request to a Signature Request
*SignerDocumentRequestApi* | [**putSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId**](docs/Api/SignerDocumentRequestApi.md#putsignaturerequestssignaturerequestiddocumentrequestsdocumentrequestidsignerssignerid) | **PUT** /signature_requests/{signatureRequestId}/document_requests/{documentRequestId}/signers/{signerId} | Adds a Signer to a given Signer Document Request
*TemplateApi* | [**getTemplates**](docs/Api/TemplateApi.md#gettemplates) | **GET** /templates | List Templates
*UserApi* | [**deleteWorkspaceWorkspaceIdUsersUserId**](docs/Api/UserApi.md#deleteworkspaceworkspaceidusersuserid) | **DELETE** /workspaces/{workspaceId}/users/{userId} | Remove a user from a workspace
*UserApi* | [**getUsers**](docs/Api/UserApi.md#getusers) | **GET** /users | List Users
*UserApi* | [**putWorkspacesWorkspaceIdUsers**](docs/Api/UserApi.md#putworkspacesworkspaceidusers) | **PUT** /workspaces/{workspaceId}/users/{userId} | Associate a user to a workspace
*WebhookApi* | [**deleteWebhooksWebhookId**](docs/Api/WebhookApi.md#deletewebhookswebhookid) | **DELETE** /webhooks/{webhookId} | Delete a Webhook subscription
*WebhookApi* | [**getWebhooks**](docs/Api/WebhookApi.md#getwebhooks) | **GET** /webhooks | List Webhook subscriptions
*WebhookApi* | [**getWebhooksWebhookId**](docs/Api/WebhookApi.md#getwebhookswebhookid) | **GET** /webhooks/{webhookId} | Get a Webhook subscription
*WebhookApi* | [**patchWebhooksWebhookId**](docs/Api/WebhookApi.md#patchwebhookswebhookid) | **PATCH** /webhooks/{webhookId} | Update a Webhook subscription
*WebhookApi* | [**postWebhooksSubscriptions**](docs/Api/WebhookApi.md#postwebhookssubscriptions) | **POST** /webhooks | Create a Webhook subscription
*WorkspaceApi* | [**deleteWorkspace**](docs/Api/WorkspaceApi.md#deleteworkspace) | **DELETE** /workspaces/{workspaceId} | Delete a Workspace
*WorkspaceApi* | [**getWorkspaces**](docs/Api/WorkspaceApi.md#getworkspaces) | **GET** /workspaces | List Workspaces
*WorkspaceApi* | [**getWorkspacesDefault**](docs/Api/WorkspaceApi.md#getworkspacesdefault) | **GET** /workspaces/default | Get the default Workspace
*WorkspaceApi* | [**getWorkspacesWorkspaceId**](docs/Api/WorkspaceApi.md#getworkspacesworkspaceid) | **GET** /workspaces/{workspaceId} | Get a Workspace
*WorkspaceApi* | [**markWorkspaceAsDefault**](docs/Api/WorkspaceApi.md#markworkspaceasdefault) | **POST** /workspaces/default | Mark the given Workspace as default
*WorkspaceApi* | [**patchWorkspacesWorkspaceId**](docs/Api/WorkspaceApi.md#patchworkspacesworkspaceid) | **PATCH** /workspaces/{workspaceId} | Update a Workspace
*WorkspaceApi* | [**postWorkspace**](docs/Api/WorkspaceApi.md#postworkspace) | **POST** /workspaces | Create a Workspace

## Models

- [Approver](docs/Model/Approver.md)
- [ApproverInfo](docs/Model/ApproverInfo.md)
- [ApproverToNotify](docs/Model/ApproverToNotify.md)
- [ArchivedFile](docs/Model/ArchivedFile.md)
- [Archiving](docs/Model/Archiving.md)
- [AuditTrailLocale](docs/Model/AuditTrailLocale.md)
- [Checkbox](docs/Model/Checkbox.md)
- [Checkbox1](docs/Model/Checkbox1.md)
- [Checkbox2](docs/Model/Checkbox2.md)
- [Consumption](docs/Model/Consumption.md)
- [ConsumptionApi](docs/Model/ConsumptionApi.md)
- [ConsumptionApp](docs/Model/ConsumptionApp.md)
- [ConsumptionAppQualifiedElectronicSignatureIdentificationMode](docs/Model/ConsumptionAppQualifiedElectronicSignatureIdentificationMode.md)
- [ConsumptionAppQualifiedElectronicSignatureIdentificationModeIdentityVerification](docs/Model/ConsumptionAppQualifiedElectronicSignatureIdentificationModeIdentityVerification.md)
- [Contact](docs/Model/Contact.md)
- [CreateContact](docs/Model/CreateContact.md)
- [CreateCustomExperience](docs/Model/CreateCustomExperience.md)
- [CreateCustomExperienceRedirectUrls](docs/Model/CreateCustomExperienceRedirectUrls.md)
- [CreateElectronicSealFieldReadOnlyTextPayload](docs/Model/CreateElectronicSealFieldReadOnlyTextPayload.md)
- [CreateElectronicSealFieldSealPayload](docs/Model/CreateElectronicSealFieldSealPayload.md)
- [CreateElectronicSealPayload](docs/Model/CreateElectronicSealPayload.md)
- [CreateElectronicSealPayloadFieldsInner](docs/Model/CreateElectronicSealPayloadFieldsInner.md)
- [CreateField](docs/Model/CreateField.md)
- [CreateFieldFont](docs/Model/CreateFieldFont.md)
- [CreateFollowersInner](docs/Model/CreateFollowersInner.md)
- [CreateSignatureRequest](docs/Model/CreateSignatureRequest.md)
- [CreateSignatureRequestMetadata](docs/Model/CreateSignatureRequestMetadata.md)
- [CreateSignatureRequestReminderSettings](docs/Model/CreateSignatureRequestReminderSettings.md)
- [CreateSignatureRequestSignersInner](docs/Model/CreateSignatureRequestSignersInner.md)
- [CreateSignatureRequestTemplatePlaceholders](docs/Model/CreateSignatureRequestTemplatePlaceholders.md)
- [CreateSignatureRequestTemplatePlaceholdersSignersInner](docs/Model/CreateSignatureRequestTemplatePlaceholdersSignersInner.md)
- [CreateSigner](docs/Model/CreateSigner.md)
- [CreateSignerDocumentRequest](docs/Model/CreateSignerDocumentRequest.md)
- [CreateWebhookSubscription](docs/Model/CreateWebhookSubscription.md)
- [CreateWebhookSubscriptionScopes](docs/Model/CreateWebhookSubscriptionScopes.md)
- [CreateWebhookSubscriptionSubscribedEvents](docs/Model/CreateWebhookSubscriptionSubscribedEvents.md)
- [CreateWebhookSubscriptionWorkspaces](docs/Model/CreateWebhookSubscriptionWorkspaces.md)
- [CreateWorkspace](docs/Model/CreateWorkspace.md)
- [CustomExperience](docs/Model/CustomExperience.md)
- [CustomExperienceDisabledNotificationsType](docs/Model/CustomExperienceDisabledNotificationsType.md)
- [CustomExperienceRedirectUrls](docs/Model/CustomExperienceRedirectUrls.md)
- [CustomExperienceSource](docs/Model/CustomExperienceSource.md)
- [DeleteWorkspace](docs/Model/DeleteWorkspace.md)
- [Document](docs/Model/Document.md)
- [DocumentInitials](docs/Model/DocumentInitials.md)
- [ElectronicSeal](docs/Model/ElectronicSeal.md)
- [ElectronicSealAuditTrail](docs/Model/ElectronicSealAuditTrail.md)
- [ElectronicSealDocument](docs/Model/ElectronicSealDocument.md)
- [ElectronicSealImage](docs/Model/ElectronicSealImage.md)
- [EmbeddedSignerWithSignatureLink](docs/Model/EmbeddedSignerWithSignatureLink.md)
- [FieldCheckbox](docs/Model/FieldCheckbox.md)
- [FieldMention](docs/Model/FieldMention.md)
- [FieldRadioButtonGroup](docs/Model/FieldRadioButtonGroup.md)
- [FieldRadioButtonGroupRadiosInner](docs/Model/FieldRadioButtonGroupRadiosInner.md)
- [FieldReadOnlyText](docs/Model/FieldReadOnlyText.md)
- [FieldSignature](docs/Model/FieldSignature.md)
- [FieldText](docs/Model/FieldText.md)
- [FieldType](docs/Model/FieldType.md)
- [FieldsInput](docs/Model/FieldsInput.md)
- [Follower](docs/Model/Follower.md)
- [Font](docs/Model/Font.md)
- [FontFamily](docs/Model/FontFamily.md)
- [FontVariants](docs/Model/FontVariants.md)
- [FromExistingContact](docs/Model/FromExistingContact.md)
- [FromExistingContact1](docs/Model/FromExistingContact1.md)
- [FromExistingSigner](docs/Model/FromExistingSigner.md)
- [FromExistingUser](docs/Model/FromExistingUser.md)
- [FromExistingUser1](docs/Model/FromExistingUser1.md)
- [FromScratch](docs/Model/FromScratch.md)
- [FromScratch1](docs/Model/FromScratch1.md)
- [FromScratch1CustomText](docs/Model/FromScratch1CustomText.md)
- [FromScratch1Info](docs/Model/FromScratch1Info.md)
- [FromScratch1RedirectUrls](docs/Model/FromScratch1RedirectUrls.md)
- [FromScratchInfo](docs/Model/FromScratchInfo.md)
- [GetContacts200Response](docs/Model/GetContacts200Response.md)
- [GetCustomExperiences200Response](docs/Model/GetCustomExperiences200Response.md)
- [GetSignatureRequests200Response](docs/Model/GetSignatureRequests200Response.md)
- [GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200Response](docs/Model/GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200Response.md)
- [GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner](docs/Model/GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner.md)
- [GetSignatureRequestsSignatureRequestIdFollowers200Response](docs/Model/GetSignatureRequestsSignatureRequestIdFollowers200Response.md)
- [GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments200Response](docs/Model/GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments200Response.md)
- [GetTemplates200Response](docs/Model/GetTemplates200Response.md)
- [GetUsers200Response](docs/Model/GetUsers200Response.md)
- [GetWorkspaces200Response](docs/Model/GetWorkspaces200Response.md)
- [InitialsArea](docs/Model/InitialsArea.md)
- [ListElectronicSealImages200Response](docs/Model/ListElectronicSealImages200Response.md)
- [Locale](docs/Model/Locale.md)
- [MarkWorkspaceAsDefault](docs/Model/MarkWorkspaceAsDefault.md)
- [Mention](docs/Model/Mention.md)
- [Mention1](docs/Model/Mention1.md)
- [Mention2](docs/Model/Mention2.md)
- [Metadata](docs/Model/Metadata.md)
- [MetadataDataValue](docs/Model/MetadataDataValue.md)
- [OTPMessage](docs/Model/OTPMessage.md)
- [OtpMessage](docs/Model/OtpMessage.md)
- [Pagination](docs/Model/Pagination.md)
- [PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequest](docs/Model/PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequest.md)
- [PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequestInfo](docs/Model/PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequestInfo.md)
- [PostArchives401Response](docs/Model/PostArchives401Response.md)
- [PostSignatureRequestsSignatureRequestIdApproversRequest](docs/Model/PostSignatureRequestsSignatureRequestIdApproversRequest.md)
- [PostSignatureRequestsSignatureRequestIdCancelRequest](docs/Model/PostSignatureRequestsSignatureRequestIdCancelRequest.md)
- [PostSignatureRequestsSignatureRequestIdReactivateRequest](docs/Model/PostSignatureRequestsSignatureRequestIdReactivateRequest.md)
- [RadioGroup](docs/Model/RadioGroup.md)
- [RadioGroup1](docs/Model/RadioGroup1.md)
- [RadioGroup1RadiosInner](docs/Model/RadioGroup1RadiosInner.md)
- [RadioGroup2](docs/Model/RadioGroup2.md)
- [RadioGroup2RadiosInner](docs/Model/RadioGroup2RadiosInner.md)
- [RadioGroupRadiosInner](docs/Model/RadioGroupRadiosInner.md)
- [ReadOnlyText](docs/Model/ReadOnlyText.md)
- [ReadOnlyText1](docs/Model/ReadOnlyText1.md)
- [Signature](docs/Model/Signature.md)
- [Signature1](docs/Model/Signature1.md)
- [Signature2](docs/Model/Signature2.md)
- [SignatureRequest](docs/Model/SignatureRequest.md)
- [SignatureRequestActivated](docs/Model/SignatureRequestActivated.md)
- [SignatureRequestActivatedDocumentsInner](docs/Model/SignatureRequestActivatedDocumentsInner.md)
- [SignatureRequestDeclineInformation](docs/Model/SignatureRequestDeclineInformation.md)
- [SignatureRequestEmailNotification](docs/Model/SignatureRequestEmailNotification.md)
- [SignatureRequestEmailNotificationSender](docs/Model/SignatureRequestEmailNotificationSender.md)
- [SignatureRequestInList](docs/Model/SignatureRequestInList.md)
- [SignatureRequestInListApproversInner](docs/Model/SignatureRequestInListApproversInner.md)
- [SignatureRequestInListDocumentsInner](docs/Model/SignatureRequestInListDocumentsInner.md)
- [SignatureRequestInListReminderSettings](docs/Model/SignatureRequestInListReminderSettings.md)
- [SignatureRequestInListSender](docs/Model/SignatureRequestInListSender.md)
- [SignatureRequestInListSignersInner](docs/Model/SignatureRequestInListSignersInner.md)
- [SignatureRequestPlaceholderReadOnlyTextFieldSubstituteInput](docs/Model/SignatureRequestPlaceholderReadOnlyTextFieldSubstituteInput.md)
- [SignatureRequestPlaceholderSignerSubstituteFromContactIdInput](docs/Model/SignatureRequestPlaceholderSignerSubstituteFromContactIdInput.md)
- [SignatureRequestPlaceholderSignerSubstituteFromInfoInput](docs/Model/SignatureRequestPlaceholderSignerSubstituteFromInfoInput.md)
- [SignatureRequestPlaceholderSignerSubstituteFromInfoInputInfo](docs/Model/SignatureRequestPlaceholderSignerSubstituteFromInfoInputInfo.md)
- [SignatureRequestPlaceholderSignerSubstituteFromUserIdInput](docs/Model/SignatureRequestPlaceholderSignerSubstituteFromUserIdInput.md)
- [SignatureRequestSignerFromContactIdInput](docs/Model/SignatureRequestSignerFromContactIdInput.md)
- [SignatureRequestSignerFromInfoInput](docs/Model/SignatureRequestSignerFromInfoInput.md)
- [SignatureRequestSignerFromInfoInputInfo](docs/Model/SignatureRequestSignerFromInfoInputInfo.md)
- [SignatureRequestSignerFromInfoInputRedirectUrls](docs/Model/SignatureRequestSignerFromInfoInputRedirectUrls.md)
- [SignatureRequestSignerFromUserIdInput](docs/Model/SignatureRequestSignerFromUserIdInput.md)
- [SignatureRequestStatus](docs/Model/SignatureRequestStatus.md)
- [Signer](docs/Model/Signer.md)
- [SignerAuditTrail](docs/Model/SignerAuditTrail.md)
- [SignerCustomText](docs/Model/SignerCustomText.md)
- [SignerDeliveryMode](docs/Model/SignerDeliveryMode.md)
- [SignerDocument](docs/Model/SignerDocument.md)
- [SignerDocumentRequest](docs/Model/SignerDocumentRequest.md)
- [SignerFieldsInner](docs/Model/SignerFieldsInner.md)
- [SignerInfo](docs/Model/SignerInfo.md)
- [SignerRedirectUrls](docs/Model/SignerRedirectUrls.md)
- [SignerSIPAddress](docs/Model/SignerSIPAddress.md)
- [SignerSign](docs/Model/SignerSign.md)
- [SmsNotification](docs/Model/SmsNotification.md)
- [SmsNotification1](docs/Model/SmsNotification1.md)
- [Template](docs/Model/Template.md)
- [Text](docs/Model/Text.md)
- [Text1](docs/Model/Text1.md)
- [Text2](docs/Model/Text2.md)
- [UpdateContact](docs/Model/UpdateContact.md)
- [UpdateCustomExperience](docs/Model/UpdateCustomExperience.md)
- [UpdateCustomExperienceRedirectUrls](docs/Model/UpdateCustomExperienceRedirectUrls.md)
- [UpdateDocument](docs/Model/UpdateDocument.md)
- [UpdateField](docs/Model/UpdateField.md)
- [UpdateFieldFont](docs/Model/UpdateFieldFont.md)
- [UpdateSignatureRequest](docs/Model/UpdateSignatureRequest.md)
- [UpdateSignatureRequestMetadata](docs/Model/UpdateSignatureRequestMetadata.md)
- [UpdateSignatureRequestMetadataDataValue](docs/Model/UpdateSignatureRequestMetadataDataValue.md)
- [UpdateSignatureRequestReminderSettings](docs/Model/UpdateSignatureRequestReminderSettings.md)
- [UpdateSigner](docs/Model/UpdateSigner.md)
- [UpdateSignerInfo](docs/Model/UpdateSignerInfo.md)
- [UpdateWebhookSubscription](docs/Model/UpdateWebhookSubscription.md)
- [UpdateWorkspace](docs/Model/UpdateWorkspace.md)
- [User](docs/Model/User.md)
- [UserWorkspacesInner](docs/Model/UserWorkspacesInner.md)
- [ViolationResponse](docs/Model/ViolationResponse.md)
- [WebhookSubscription](docs/Model/WebhookSubscription.md)
- [WebhookSubscriptionScopes](docs/Model/WebhookSubscriptionScopes.md)
- [WebhookSubscriptionSubscribedEvents](docs/Model/WebhookSubscriptionSubscribedEvents.md)
- [WebhookSubscriptionWorkspaces](docs/Model/WebhookSubscriptionWorkspaces.md)
- [Workspace](docs/Model/Workspace.md)
- [WorkspaceUsersInner](docs/Model/WorkspaceUsersInner.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

contact@yousign.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
